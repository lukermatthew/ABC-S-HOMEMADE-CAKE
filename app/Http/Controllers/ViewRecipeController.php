<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ViewRecipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
    
        $item = Item::find($id);
        return view('Recipe')->with('item',$item);
        

    }
}
