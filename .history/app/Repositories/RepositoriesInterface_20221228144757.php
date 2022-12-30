<?php

namespace App\Repositories;

interface RepositoriesInterface
{
    public function all();
    public function find($id);
    public function f(array $data);
}
