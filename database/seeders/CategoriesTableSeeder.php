<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        // $categorie = new \App\Models\Categories();
        // $categorie->nom = "T-Shirt";
        // $categorie->is_online = 1;
        // $categorie->save();
        // //
        // $categorie3 = new \App\Models\Categories();
        // $categorie3->nom = "Chemises";
        // $categorie3->is_online = 1;
        // $categorie3->save();
        // //
        // $categorie4 = new \App\Models\Categories();
        // $categorie4->nom = "Patalons";
        // $categorie4->is_online = 1;
        // $categorie4->save();
        // //
        // $categorie5 = new \App\Models\Categories();
        // $categorie5->nom = "Chaussures";
        // $categorie5->is_online = 1;
        // $categorie5->save();
        //
        $categorie6 = new \App\Models\Categories();
        $categorie6->nom = "Cuassures de Cuire";
        $categorie6->is_online = 1;
        $categorie6->parent_id = 14;
        $categorie6->save();
        //
        $categorie7 = new \App\Models\Categories();
        $categorie7->nom = "Chaussures de Sport";
        $categorie7->is_online = 1;
        $categorie7->parent_id = 14;
        $categorie7->save();
        //
        $categorie8 = new \App\Models\Categories();
        $categorie8->nom = "Sans dessins";
        $categorie8->is_online = 1;
        $categorie8->parent_id = 11;
        $categorie8->save();
        //
        $categorie9 = new \App\Models\Categories();
        $categorie9->nom = "Avec disign";
        $categorie9->is_online = 1;
        $categorie9->parent_id = 11;
        $categorie9->save();
        //
        $categorie10 = new \App\Models\Categories();
        $categorie10->nom = "Jean patalon";
        $categorie10->is_online = 1;
        $categorie10->parent_id = 13;
        $categorie10->save();
        //
        $categorie11 = new \App\Models\Categories();
        $categorie11->nom = "Tissu patalon";
        $categorie11->is_online = 1;
        $categorie11->parent_id = 13;
        $categorie11->save();

    }
}
