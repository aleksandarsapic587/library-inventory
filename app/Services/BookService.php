<?php

namespace App\Services;

use App\Repositories\Interfaces\BookRepositoryInterface;

class BookService
{
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAllBooks()
    {
        return $this->bookRepository->all();
    }

    public function getBookById($id)
    {
        return $this->bookRepository->find($id);
    }

    public function createBook(array $data)
    {
        return $this->bookRepository->create($data);
    }

    public function updateBook(array $data, $id)
    {
        return $this->bookRepository->update($data, $id);
    }

    public function deleteBook($id)
    {
        return $this->bookRepository->delete($id);
    }
}
