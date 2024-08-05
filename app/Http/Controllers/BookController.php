<?php


namespace App\Http\Controllers;

use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        return $this->bookService->getAllBooks();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        return $this->bookService->createBook($request->all());
    }

    public function show($id)
    {
        return $this->bookService->getBookById($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        return $this->bookService->updateBook($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->bookService->deleteBook($id);
    }
}
