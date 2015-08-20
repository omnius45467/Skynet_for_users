<?php

namespace App\Skynet\Repositories\Contracts;

interface TrackerRepository
{
    public function all();

    public function find($id);

    public function create(array $data);
}