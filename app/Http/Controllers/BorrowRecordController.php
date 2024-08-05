<?php
namespace App\Http\Controllers;

use App\Services\BorrowRecordService;
use Illuminate\Http\Request;

class BorrowRecordController extends Controller
{
    protected $borrowRecordService;

    public function __construct(BorrowRecordService $borrowRecordService)
    {
        $this->borrowRecordService = $borrowRecordService;
    }

    public function index()
    {
        return $this->borrowRecordService->getAllBorrowRecords();
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'borrowed_at' => 'required|date',
        ]);

        return $this->borrowRecordService->createBorrowRecord($request->all());
    }

    public function show($id)
    {
        return $this->borrowRecordService->getBorrowRecordById($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'borrowed_at' => 'required|date',
            'returned_at' => 'nullable|date',
        ]);

        return $this->borrowRecordService->updateBorrowRecord($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->borrowRecordService->deleteBorrowRecord($id);
    }
}
