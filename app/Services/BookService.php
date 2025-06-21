<?php
// app/Services/BookService.php
namespace App\Services;

use App\Repositories\BookRepositoryInterface;

class BookService
{
    public function __construct(
        protected BookRepositoryInterface $bookRepository
    ) {}

    public function getPaginatedBooks(int $perPage, string $author = null, bool $available = null)
    {
        return $this->bookRepository->allPaginated($perPage, $author, $available);
    }

    public function getBook(int $id)
    {
        return $this->bookRepository->findOrFail($id);
    }

    public function createBook(array $data)
    {
        return $this->bookRepository->create($data);
    }

    public function rentBook(int $bookId)
    {
        return $this->bookRepository->rentBook($bookId);
    }

    public function returnBook(int $bookId)
    {
        return $this->bookRepository->returnBook($bookId);
    }
}