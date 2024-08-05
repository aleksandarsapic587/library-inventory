<?php

namespace App\Services;

use App\Repositories\Interfaces\AuthorRepositoryInterface;

class AuthorService
{
    protected $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function getAllAuthors()
    {
        return $this->authorRepository->all();
    }

    public function getAuthorById($id)
    {
        return $this->authorRepository->find($id);
    }

    public function createAuthor(array $data)
    {
        return $this->authorRepository->create($data);
    }

    public function updateAuthor(array $data, $id)
    {
        return $this->authorRepository->update($data, $id);
    }

    public function deleteAuthor($id)
    {
        return $this->authorRepository->delete($id);
    }
}
