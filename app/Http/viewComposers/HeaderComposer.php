<?php

namespace App\Http\viewComposers;
use App\Models\Categories;
use Illuminate\View\View;

class HeaderComposer
{
     public function compose(View $view)
     {
        $matches = ['is_online'=>1,'parent_id'=>null];
        $view->with('categorie',Categories::where($matches)->get());
     }
}