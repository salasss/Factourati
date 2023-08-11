<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class factures extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'Factures';
    protected $fillable =[
            'id',
            'facture_number',
            'facture_Date',
            'Echeance_date',
            'valeur_tva',
            'Total',
            'Status',
            'note'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

}
