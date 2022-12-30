<?php

namespace App\Repositories;

interface RepositoriesInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
}
