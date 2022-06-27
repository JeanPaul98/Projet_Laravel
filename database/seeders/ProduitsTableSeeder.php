<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //T-SHIRT
        $produit = new \App\Models\Produit();
        $produit->nom = "Sans dessin jaune";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt sans dessin pure coton couleur jaune";
        $produit->photo_principale = "goonies.jpg";
        $produit->categories_id = 11;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "Sans dessin blanc";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt sans dessin pure coton couleur blanche";
        $produit->photo_principale = "t-shirt_blanc.jpg";
        $produit->categories_id = 11;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "Sans dessin bleu";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt sans dessin pure coton couleur bleu";
        $produit->photo_principale = "t-shirt_bleu.jpg";
        $produit->categories_id = 11;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "sans dessin rouge";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt sans dessin pure coton couleur rouge";
        $produit->photo_principale = "t-shirt.jpg";
        $produit->categories_id = 11;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "cendre singe";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt coton glace avec disgn";
        $produit->photo_principale = "t.jpg";
        $produit->categories_id = 11;    
        $produit->save();
         //
         $produit = new \App\Models\Produit();
         $produit->nom = "Blanc singe";
         $produit->prix_ht = 3500;
         $produit->description = "T-Shirt coton glace avec disgn";
         $produit->photo_principale = "t1.jpg";
         $produit->categories_id = 11;
         $produit->save();
          //
        $produit = new \App\Models\Produit();
        $produit->nom = "Noir Kiloa";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt coton glace avec disgn";
        $produit->photo_principale = "t2.jpg";
        $produit->categories_id = 11;
        $produit->save();
         //
         $produit = new \App\Models\Produit();
         $produit->nom = "Noir Naruto shipoden";
         $produit->prix_ht = 3500;
         $produit->description = "T-Shirt coton glace avec disgn";
         $produit->photo_principale = "t3.jpg";
         $produit->categories_id = 11;
         $produit->save();
          //
        $produit = new \App\Models\Produit();
        $produit->nom = "Noir Naruto";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt coton glace avec disgn";
        $produit->photo_principale = "t4.jpg";
        $produit->categories_id = 11;
        $produit->save();
         //
        $produit = new \App\Models\Produit();
        $produit->nom = "Noir Sasuke";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt coton glace avec disgn";
        $produit->photo_principale = "t5.jpg";
        $produit->categories_id = 11;
        $produit->save();
          //
        $produit = new \App\Models\Produit();
        $produit->nom = "Noir ADT";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "t6.jpg";
        $produit->categories_id = 11;
        $produit->save();
         //
        $produit = new \App\Models\Produit();
        $produit->nom = "Noir ADT";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "t7.jpg";
        $produit->categories_id = 11;
        $produit->save();

         /***************************************************/
        //PATALON
        $produit = new \App\Models\Produit();
        $produit->nom = "Jean homme quarante";
        $produit->prix_ht = 3500;
        $produit->description = "jean homme quarante neuf stone denim stretch";
        $produit->photo_principale = "p1.jpg";
        $produit->categories_id = 13;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "jean skinny";
        $produit->prix_ht = 3500;
        $produit->description = "Pantalon en jean skinny fit pour homme Bleu fonce Bolf";
        $produit->photo_principale = "p2.jpg";
        $produit->categories_id = 13;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "pantalon-homme-decontractes";
        $produit->prix_ht = 3500;
        $produit->description = "pantalon-homme-decontractes-pour-hommes-pantalons";
        $produit->photo_principale = "p3.jpg";
        $produit->categories_id = 13;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "pantalon homme de sport";
        $produit->prix_ht = 3500;
        $produit->description = "pantalon-homme-de-sport-pour-hommes-slim-fit-strip";
        $produit->photo_principale = "p4.jpg";
        $produit->categories_id = 13;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chino bleu";
        $produit->prix_ht = 3500;
        $produit->description = "chino bleu nuit pantalon smart";
        $produit->photo_principale = "p5.jpg";
        $produit->categories_id = 13;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "patalon_homme_carreau";
        $produit->prix_ht = 3500;
        $produit->description = "patalon_homme_carreau";
        $produit->photo_principale = "p6.jpg";
        $produit->categories_id = 13;
        $produit->save();

        /***************************************************/
        //CHEMISE
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise_ckinny";
        $produit->prix_ht = 3000;
        $produit->description = "chemise_ckinny";
        $produit->photo_principale = "ch1.jpg";
        $produit->categories_id = 12;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise_col_casser";
        $produit->prix_ht = 3000;
        $produit->description = "chemise_col_casser";
        $produit->photo_principale = "ch2.jpg";
        $produit->categories_id = 12;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise_mousquetaire";
        $produit->prix_ht = 3000;
        $produit->description = "chemise_mousquetaire";
        $produit->photo_principale = "ch3.jpg";
        $produit->categories_id = 12;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise manche longue bleu";
        $produit->prix_ht = 3000;
        $produit->description = "chemise manche longue bleu";
        $produit->photo_principale = "ch4.jpg";
        $produit->categories_id = 12;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise manche longeue blanche";
        $produit->prix_ht = 3000;
        $produit->description = "chemise manche longeue blanche";
        $produit->photo_principale = "ch5.jpg";
        $produit->categories_id = 12;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chemise bleu";
        $produit->prix_ht = 3000;
        $produit->description = "chemise bleu";
        $produit->photo_principale = "ch6.jpg";
        $produit->categories_id = 12;
        $produit->save();
        /***************************************************/
        //CHAUSURES
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussure homme ville";
        $produit->prix_ht = 4500;
        $produit->description = "chaussure de ville noire homme";
        $produit->photo_principale = "chau1.jpg";
        $produit->categories_id = 14;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussure homme ville";
        $produit->prix_ht = 4500;
        $produit->description = "chaussure double boucle en marron foncé";
        $produit->photo_principale = "chau2.jpg";
        $produit->categories_id = 14;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussure homme ville";
        $produit->prix_ht = 4500;
        $produit->description = "chaussure homme ville";
        $produit->photo_principale = "chau3.jpg";
        $produit->categories_id = 14;
        $produit->save(); 
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussures de baskets";
        $produit->prix_ht = 4500;
        $produit->description = "chaussures et baskets et marque";
        $produit->photo_principale = "chau4.jpg";
        $produit->categories_id = 14;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussures de baskets";
        $produit->prix_ht = 4500;
        $produit->description = "adidas hommes verte";
        $produit->photo_principale = "chau5.jpg";
        $produit->categories_id = 14;
        $produit->save();
        //
        $produit = new \App\Models\Produit();
        $produit->nom = "chaussures de baskets";
        $produit->prix_ht = 4500;
        $produit->description = "adidas hommes grise";
        $produit->photo_principale = "chau6.jpg";
        $produit->categories_id = 14;
        $produit->save();
    }
}
