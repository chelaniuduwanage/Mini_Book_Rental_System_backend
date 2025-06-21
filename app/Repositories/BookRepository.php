<?php
// app/Repositories/BookRepository.php
namespace App\Repositories;

use App\Models\Book;
use Illuminate\Pagination\LengthAwarePaginator;

class BookRepository implements BookRepositoryInterface
{
    public function allPaginated(int $perPage, string $author = null, bool $available = null): LengthAwarePaginator
    {
        return Book::query()
            ->when($author, fn($q) => $q->where('author', 'like', "%$author%"))
            ->when($available !== null, fn($q) => $q->where('is_available', $available))
            ->paginate($perPage);
    }

    public function findOrFail(int $id)
    {
        return Book::findOrFail($id);
    }

    public function create(array $data)
    {
        return Book::create($data);
    }

    public function rentBook(int $bookId)
    {
        $book = $this->findOrFail($bookId);

        if (!$book->is_available) {
            abort(400, 'Book is not available for rent');
        }

        $book->update(['is_available' => false]);
        $book->rentals()->create(['rental_date' => now()]);

        return $book;
    }

    public function returnBook(int $bookId)
    {
        $book = $this->findOrFail($bookId);

        if ($book->is_available) {
            abort(400, 'Book is already available');
        }

        $book->update(['is_available' => true]);
        $book->rentals()->latest()->first()->update(['return_date' => now()]);

        return $book;
    }
}