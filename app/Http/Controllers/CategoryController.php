<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Notifications\Taskcompleted;

class CategoryController extends Controller
{
    public function category(){
        return view('categories.category');
}

 public function compareFiles(){
        return view('compare_files.index');
}
public function files(){
        return view('compare_files.compare_directory');
}
  public function addCategory(Request $request){
      $this->validate($request,[
          'category' => 'required'
      ]);
      $category = new Category;
      $category->category = $request->input('category');
      $category->save();
      return redirect('/category')->with('response', 'Category Added Successfully');
  }
}


