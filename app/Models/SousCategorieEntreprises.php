<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorieEntreprises extends Model
{
    use HasFactory;

    public function CategoryEntreprise()
    {
        return $this->hasMany(CategorieEntreprises::class);
    }
}
