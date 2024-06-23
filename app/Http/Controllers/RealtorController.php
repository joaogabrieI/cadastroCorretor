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
            'sucess.message' => "O Corretor '{$request->name}' foi cadastrado com sucesso!"
        ]);
    }

    public function destroy(Realtor $realtor, Request $request)
    {
        Realtor::destroy($realtor->id);
        return to_route('realtors.index')->with([
            'sucess.message' => "Corretor excluído com sucesso!"
        ]);
    }

    public function edit(Realtor $realtor)
    {
        return view('realtors.edit')->with([
            'realtor' => $realtor
        ]);
    }

    public function update(Realtor $realtor, RealtorFormRequest $request)
    {
        $realtor->fill($request->all())->save();
        return to_route('realtors.index')->with([
            'sucess.message' => "Corretor alterado com sucesso!"
        ]);
    }
}
