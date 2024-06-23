<?php

namespace App\Http\Controllers;

use App\Http\Requests\RealtorFormRequest;
use App\Models\Realtor;
use Illuminate\Http\Request;

class RealtorController extends Controller
{
    public function index(Request $request)
    {
        $realtors = Realtor::all();
        $sucessMessage = $request->session()->get('sucess.message');

        return view('realtors.index')->with([
            'sucessMessage' => $sucessMessage,
            'realtors' => $realtors
        ]);
    }

    public function store(RealtorFormRequest $request)
    {
        Realtor::create($request->all());

        return to_route('realtors.index')->with([
            'sucess.message' => "Corretor '{$request->name}' foi cadastrado com sucesso!"
        ]);
    }
}
