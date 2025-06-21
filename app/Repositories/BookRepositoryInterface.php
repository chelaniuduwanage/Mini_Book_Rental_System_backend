<?php
// app/Repositories/BookRepositoryInterface.php
namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface BookRepositoryInterface
{
    public function allPaginated(int $perPage, string $author = null, bool $available = null): LengthAwarePaginator;
    public function findOrFail(int $id);
    public function create(array $data);
    public function rentBook(int $bookId);
    public function returnBook(int $bookId);
}