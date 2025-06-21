<?php
// app/Models/Rental.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'rental_date', 'return_date'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}