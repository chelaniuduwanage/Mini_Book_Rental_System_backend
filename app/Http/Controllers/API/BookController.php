<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Resources\BookResource;
use App\Services\BookService;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function __construct(
        protected BookService $bookService
    ) {}

    public function index(): JsonResponse
    {
        $perPage = request()->input('per_page', 12);
        $author = request()->input('author');
        $available = request()->input('available');

        $books = $this->bookService->getPaginatedBooks(
            $perPage,
            $author,
            $available !== null ? (bool)$available : null
        );

        return BookResource::collection($books)->response();
    }

    public function store(StoreBookRequest $request): JsonResponse
    {
        $book = $this->bookService->createBook($request->validated());
        return (new BookResource($book))
            ->response()
            ->setStatusCode(201);
    }

    public function show(int $id): JsonResponse
    {
        $book = $this->bookService->getBook($id);
        return (new BookResource($book))->response();
    }

    public function rentBook(int $id): JsonResponse
    {
        try {
            $book = $this->bookService->rentBook($id);
            return response()->json([
                'message' => 'Book rented successfully',
                'data' => new BookResource($book)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    public function returnBook(int $id): JsonResponse
    {
        try {
            $book = $this->bookService->returnBook($id);
            return response()->json([
                'message' => 'Book returned successfully',
                'data' => new BookResource($book)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }
}