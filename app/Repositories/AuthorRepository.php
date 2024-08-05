<?php

namespace App\Repositories;

use App\Models\Author;
use App\Repositories\Interfaces\AuthorRepositoryInterface;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function all()
    {
        return Author::all();
    }

    public function find($id)
    {
        return Author::find($id);
    }

    public function create(array $data)
    {
        return Author::create($data);
    }

    public function update(array $data, $id)
    {
        $author = Author::find($id);
        $author->update($data);
        return $author;
    }

    public function delete($id)
    {
        return Author::destroy($id);
    }
}
