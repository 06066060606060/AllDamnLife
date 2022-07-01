<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'description',
        'prix',
        'image',
        'note',
        'actif',
        'cat_id',
        
    ];
    
    public function produit()
    {
        return $this;
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'id_comm', 'user_id','note', 'product_id', 'contenu' )->orderBy('created_at', 'DESC');
    }

    public function categorie()
    {
        return $this->hasOne(Categories::class);
    }

    public function categ()
    {

        return $this->belongsTo(Categories::class, 'cat_id');
  
      }
  

}
