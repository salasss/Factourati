<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Produits';
    protected $fillable =[
            'Reference',
            'nom',
            'description',
            'Famille',
            'quantité',
            'prix_ht',
            'tva',
            'image'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
