<?php

namespace App\Repositories;

use App\Models\User;
use \Spatie\Permission\Models\Role;

class ClienteRepository
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function list(string $orderBy, string $order)
    {
        return $this
            ->model
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->where('model_type', '=', 'App\Models\User')
            ->where('role_id', '=', 2)
            ->orderBy($orderBy, $order)
            ->get();
    }

    public function findById(int $id)
    {
        return $this->model->find($id);
    }

    public function save(array $data = [])
    {
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();

        $role = Role::findByName(User::CLIENTE_ROLE);
        $user->assignRole($role);

        return $user;
    }

    public function update(int $id, array $data = [])
    {
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->save();

        $role = Role::findByName(User::CLIENTE_ROLE);
        $user->assignRole($role);

        return $user;
    }
}
