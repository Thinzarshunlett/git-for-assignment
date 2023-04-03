<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = Category::orderBy('categories.created_at','desc')
        ->paginate(5);;
        $category->appends(request()->all());
        return view('admin.category.index',compact('category'));
    }
    public function addCat(){

        return view('admin.category.addCat');
    }
    public function add(Request $request){
        // dd($request->all());
        // $category = Category::select('*')->get();
        // dd($request->all());
            //  return view('admin.category.addCat',compact('category'));
            $file =$request->file('photo');
            $fileName =uniqid().'_'.$file->getclientOriginalName();
            $file->move(public_path().'/photo'.$fileName);
            $data = $this->requestItemData($request,$fileName);

        Category::create($data);

        return redirect()->route('admin#category');
    }


    private function requestItemData($request, $fileName){
        return  [
            'category' => $request->category,
            'photo' => $request->photo,
            'status' => $request->status,
            'created_at'=> Carbon::now(),
             'updated_at'=> Carbon::now()

        ];
    }
}
