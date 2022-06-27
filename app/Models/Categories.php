<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    //Recuperer la categorie parent d'une categories
    public function parent(){
        return $this->belongsTo('app\Models\Categories.php','parent_id');
    }

    public function childrens(){
        return $this->hasMany('app\Models\Categories.php','parent_id');
    }

    //Recuperer les produits de la categories >> OneTomany
    public function produitsParent(){
        return $this->hasMany('App\Models\Produit');
    }

    //recuperation des produits situes dans la categories enfant au travers d'une categorie parent
    public function produitsChild(){
            return $this->hasMany('App\Models\Produit','app\Models\Categories.php','parent_id','categories_id');
    }

    public function produits(){
        $produits = $this->produitsParent()->get()->merge($this->produitsChild()->get());
        return $produits;
    }

}
