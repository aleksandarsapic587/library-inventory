<?php

namespace App\Repositories;

use App\Models\BorrowRecord;
use App\Repositories\Interfaces\BorrowRecordRepositoryInterface;

class BorrowRecordRepository implements BorrowRecordRepositoryInterface
{
    public function all()
    {
        return BorrowRecord::with('book', 'user')->get();
    }

    public function find($id)
    {
        return BorrowRecord::with('book', 'user')->find($id);
    }

    public function create(array $data)
    {
        return BorrowRecord::create($data);
    }

    public function update(array $data, $id)
    {
        $borrowRecord = BorrowRecord::find($id);
        $borrowRecord->update($data);
        return $borrowRecord;
    }

    public function delete($id)
    {
        return BorrowRecord::destroy($id);
    }
}
