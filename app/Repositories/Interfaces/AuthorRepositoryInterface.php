<?php

// app/Repositories/AuthorRepositoryInterface.php
namespace App\Repositories\Interfaces;

interface AuthorRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function update($id, array $data);
    public function delete($id);
}
