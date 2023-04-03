<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home(){
        $categories = Category::get();
        $item = Item::get();

        return view('user.homePage',compact('item','categories'));
    }
    public function fashion(){
        $categories = Category::get();
        $item = Item::get();
        return view('user.fashion',compact('item','categories'));
    }
   public function viewPage($itemId){
    $item = Item::where('id',$itemId)->first();
    $itemList = Item::get();
    return view('user.details',compact('item','itemList'));
   }
   public function ajaxStatus(Request $request){
    // $request->status = $request->status == null ? "" : $request->status;

    $categories = Category::select('id','category')->
    where('categories.id',$request->status)
    ->get();
    return response() ->json($categories,200);


   }
}
