<?php
// database/seeders/BookSeeder.php
namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'published_date' => '1925-04-10',
                'description' => 'A classic novel of the Jazz Age',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'published_date' => '1960-07-11',
                'description' => 'A powerful story of racial injustice',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'published_date' => '1949-06-08',
                'description' => 'A dystopian social science fiction novel',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_date' => '1813-01-28',
                'description' => 'A romantic novel of manners',
                'is_available' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'published_date' => '1937-09-21',
                'description' => 'A fantasy novel and children\'s book',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'author' => 'J.K. Rowling',
                'published_date' => '1997-06-26',
                'description' => 'The first novel in the Harry Potter series',
                'is_available' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'published_date' => '1954-07-29',
                'description' => 'An epic high-fantasy novel',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Animal Farm',
                'author' => 'George Orwell',
                'published_date' => '1945-08-17',
                'description' => 'An allegorical novella',
                'is_available' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Chronicles of Narnia',
                'author' => 'C.S. Lewis',
                'published_date' => '1950-10-16',
                'description' => 'A series of fantasy novels',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'published_date' => '1953-10-19',
                'description' => 'A dystopian novel',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Book::insert($books);
    }
}