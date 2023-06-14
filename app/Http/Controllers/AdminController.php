<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
   public function view_category()
   {

    return view('admin.category');
   }

   public function add_category(Request $reuqest)
   {
        $data = new category;

        $data->category_name=$reuqest->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
   }
}
