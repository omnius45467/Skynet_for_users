<?php

namespace App\Skynet\Repositories\Contracts;

interface UserRepository
{
    public function all();

    public function find($id);

    public function create(array $data);
}