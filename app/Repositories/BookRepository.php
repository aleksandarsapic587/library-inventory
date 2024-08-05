<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\Interfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    public function all()
    {
        return Book::with('author')->get();
    }

    public function find($id)
    {
        return Book::with('author')->find($id);
    }

    public function create(array $data)
    {
        return Book::create($data);
    }

    public function update(array $data, $id)
    {
        $book = Book::find($id);
        $book->update($data);
        return $book;
    }

    public function delete($id)
    {
        return Book::destroy($id);
    }
}
