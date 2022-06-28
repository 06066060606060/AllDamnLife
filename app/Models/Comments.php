<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        
    ];

    public function produit()
    {
        return $this->belongsTo(Produits::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


