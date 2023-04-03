<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    //
    public function index(){


        $items = Item::select('items.*','categories.category as category_name')

            ->leftJoin('categories','items.category_id','categories.id')

            ->orderBy('items.created_at','desc')
            ->paginate(5);
        $items->appends(request()->all());

        return view('admin.item.index',compact('items'));
    }
    public function addItem(){
        $categories = Category::select('id','category')->get();
        return view('admin.item.addItem',compact('categories'));
    }
    public function add(Request $request){

            // $this ->itemValidationCheck($request);


            $file =$request->file('itemPhoto');
            $fileName =uniqid().'_'.$file->getclientOriginalName();
            $file->move(public_path().'/itemPhoto',$fileName);
            $data = $this->getPostData($request,$fileName);
            Item::create($data);
            // return view('admin.item.index',compact('item'));
            return redirect()->route('admin#item');
        }

       
        private function getPostData($request, $fileName){

            return [

                'item_name' => $request->itemName,

                'price' => $request->price,
                'category_id' => $request ->catName,
                'description' => $request->description,
                'item_con' => $request->itemCon,
                'item_type' => $request->itemType,
                'status' => $request->status,
                  'item_photo'=> $fileName,

                  'ownerName' => $request->ownerName,
                  'address' => $request->address,
                  'contNo' => $request->contNo,


            'created_at'=> Carbon::now(),
             'updated_at'=> Carbon::now()
            ];
        }
        // request item data
        // private function requestItemData($request){
        //     return  [
        //         'item_name' => $request->itemName,
        //         'cat_name' => $request->catName,
        //         'price' => $request->price,
        //         'description' => $request->description,
        //         'item_con' => $request->itemCon,
        //         'item_type' => $request->itemType,
        //         'status' => $request->status,
        //         'item_photo' => $request->itemPhoto,
        //         'ownerName' => $request->ownerName,
        //         'address' => $request->address,
        //         'contNo' => $request->contNo,
        //         'ownerAddress' => $request->ownerAddress,
        //     ];
        // }

}
