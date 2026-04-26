<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    // category list page

    public function  categoryListPage(){

        $categories = Category::orderBy('created_at','desc')->paginate(5);
        return view('admin.category.categoryList',compact('categories'));
    }

    // create    category
    public function createCategory(Request $request){
       $this->checkValidation($request);

       Category::create([
            'title' => $request->categoryName
       ]);

       Alert::success('Category Create', 'Category Create Successfully!');


       return back();
    }

    // update Category Page

    public function updateCategoryPage($id){
        $categoryUpdate = Category::where('category_id',$id)->first();
        return view('admin.category.updatePage',compact('categoryUpdate'));
    }

     // update Category

    public function updateCategory($id,Request $request){

       $this->checkValidation($request);

     Category::where('category_id',$id)->update([
          'title' => $request->categoryName
       ]);

        Alert::success('Category Update', 'Category upated Successfully...');


       return to_route('categoryListPage');
    }




    // delete   category

    public function deleteCategory($id){
        Category::where('category_id',$id)->delete();

         Alert::success('Category Delete', 'Category Deleted Successfully...');


      return back();
    }


    // check category validation for category List
    private function checkValidation($request){
        $request->validate([
        'categoryName' => 'required'
       ]);
    }
}
