<?php

namespace App\Http\View\Composers;

use App\Models\category;
use App\Models\producttype;
use Illuminate\View\View;

class MenuComposer
{

    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $categories = category::select('id', 'name', 'parent_id')->where('status', 1)->orderBy('id')->get();
        $producttypes=producttype::select('id', 'name', 'category_id')->where('status', 1)->orderBy('id')->get();
        $view->with('categories', $categories)->with('producttypes', $producttypes);
    }
}
