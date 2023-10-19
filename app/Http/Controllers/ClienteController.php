<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Repositories\ClienteRepository;

class ClienteController extends Controller
{
    protected $repository;

    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listar(Request $request)
    {
        $orderBy = ($request->input('orderBy')) ? $request->input('orderBy') : 'id';
        $order = ($request->input('order')) ? $request->input('order') : 'asc';

        return view('clientes.listar', [
            'clientes' => $this->repository->list($orderBy, $order),
            'orderBy' => $orderBy,
            'order' => ($order != 'asc') ? 'asc' : 'desc',
        ]);

    }

    public function cadastrar()
    {
        return view('clientes.cadastrar');

    }

    public function criar(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($request->id),
            ],
            // 'status' => 'required',
        ]);

        $this->repository->save($request->all());

        return redirect('/cliente');
    }

    public function editar(Request $request)
    {
        return view('clientes.editar', [
            'cliente' => $this->repository->findById($request->id),
        ]);

    }

    public function atualizar(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($request->id),
            ],
            // 'status' => 'required',
        ]);

        $this->repository->update($request->id, $request->all());

        return redirect('/cliente');
    }

    public function deletar()
    {
        return '';
    }
}
