<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
     // delete acc
     public function delete($id){
        Category::where('id',$id)->delete();
        Item::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>'Admin Account Deleted...']);

    }
}
