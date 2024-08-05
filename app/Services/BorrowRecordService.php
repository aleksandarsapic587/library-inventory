<?php

namespace App\Services;

use App\Repositories\Interfaces\BorrowRecordRepositoryInterface;

class BorrowRecordService
{
    protected $borrowRecordRepository;

    public function __construct(BorrowRecordRepositoryInterface $borrowRecordRepository)
    {
        $this->borrowRecordRepository = $borrowRecordRepository;
    }

    public function getAllBorrowRecords()
    {
        return $this->borrowRecordRepository->all();
    }

    public function getBorrowRecordById($id)
    {
        return $this->borrowRecordRepository->find($id);
    }

    public function createBorrowRecord(array $data)
    {
        return $this->borrowRecordRepository->create($data);
    }

    public function updateBorrowRecord(array $data, $id)
    {
        return $this->borrowRecordRepository->update($data, $id);
    }

    public function deleteBorrowRecord($id)
    {
        return $this->borrowRecordRepository->delete($id);
    }
}
