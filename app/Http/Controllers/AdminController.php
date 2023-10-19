<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Repositories\AdminRepository;

class AdminController extends Controller
{
    protected $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listar(Request $request)
    {
        $orderBy = ($request->input('orderBy')) ? $request->input('orderBy') : 'id';
        $order = ($request->input('order')) ? $request->input('order') : 'asc';

        $listaAdmins = $this->repository->list($orderBy, $order);

        return view('admin.listar', [
            'admins' => $listaAdmins,
            'orderBy' => $orderBy,
            'order' => ($order != 'asc') ? 'asc' : 'desc',
        ]);

    }

    public function cadastrar()
    {
        return view('admin.cadastrar');

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

        return redirect('/admin');
    }

    public function editar(Request $request)
    {
        return view('admin.editar', [
            'admin' => $this->repository->findById($request->id),
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

        return redirect('/admin');
    }

    public function deletar()
    {
        return '';
    }
}
