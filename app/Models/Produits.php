<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    public function produit()
    {
        return $this;
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'id_comm', 'user_id', 'product_id', 'contenu' )->orderBy('created_at', 'DESC');
    }

    public function categorie()
    {
        return $this->hasOne(Categories::class);
    }
  

}
