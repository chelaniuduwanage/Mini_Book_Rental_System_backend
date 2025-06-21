<?php
// app/Models/Book.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author', 'published_date', 'description', 'is_available'
    ];

    protected $casts = [
        'published_date' => 'date',
        'is_available' => 'boolean'
    ];

    public function rentals(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}