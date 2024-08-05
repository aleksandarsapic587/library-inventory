<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->authorService->getAllAuthors();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return $this->authorService->createAuthor($request->all());
    }

    public function show($id)
    {
        return $this->authorService->getAuthorById($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return $this->authorService->updateAuthor($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->authorService->deleteAuthor($id);
    }
}
