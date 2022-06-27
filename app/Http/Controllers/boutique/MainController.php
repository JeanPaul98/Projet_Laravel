<?php

namespace App\Http\Controllers\boutique; 
use App\Models\Produit;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        //select * from Produits;
        $produits = Produit::all();
        // dd($produits);
    //    $categorie = Categories::where('is_online',1)->get();
    //    return view('boutique.index',compact('produits','categorie'));
       return view('boutique.index',compact('produits'));
    }

    public function produit(Request $request) {
         //print_r($_GET);
         //die($_GET);
         //select * from Produits where id = ?
         //dd($request->id);
         $produit = Produit::find($request->id);
        // $categorie = Categories::where('is_online',1)->get(); 
        return view('boutique.produit',compact('produit'));
        
    }

    public function viewByCategories(Request $request) {
        //Recuperer toute les categories >> is_online == 1
        // $categorie = Categories::where('is_online',1)->get();
        // return view('boutique.categories',compact('categorie'));
        //select * from produits = categories_id = $request->id
      //  $produits = Produit::where('categories_id',$request->id)->get();
        $categori = Categories::find($request->id);
        $produits = $categori->produits(); 
        return view('boutique.categories',compact('produits','categori'));
    }
}
