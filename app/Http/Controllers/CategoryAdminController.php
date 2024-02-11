<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryAdminController extends Controller
{
    // page category
    public function index(){
        $data_categories = Category::all();
        return view('pages.category.category', compact('data_categories'));
    }

    // page  create
    public function create(){
        return view('pages.category.add-category');
    }
    // store function
    public function store(Request $request){
        $request->validate([
            'cover'         => ['required', 'mimes:png,jpg, jpeg, gif'],
            'name'          => ['required'],
            'description'   => ['required']
        ]);

        $cover_file = $request->file('cover');
        $cover_extention = $cover_file->extension();
        $cover_name = date('dmyhis').'.'.$cover_extention;
        $cover_file->move(public_path('/assets/img/cover/categories/'), $cover_name);

        $data_category = [
            'cover'         => $cover_name,
            'name'          => $request->name,
            'description'   => $request->description
        ];

        Category::create($data_category);
        return redirect('/admin/category')->with('success', 'category has been successfully created');
    }
    
    // page  edit
    public function edit(Category $category){
        return view('pages.category.update-category', compact('category'));
    }

    // update category
    public function update(Request $request, Category $category){
        $request->validate([
            'name'          => ['required', 'unique:categories,name,'.$category->id],
            'description'   => ['required']
        ]);

        $data_category_update = [
            'name'          => $request->name,
            'description'   => $request->description
        ];

        if ($request->hasFile('cover')) {
                $request->validate([
                    'cover' => ['mimes:png,jpg, jpeg, gif'],
                ]);

                $cover_file = $request->file('cover');
                $cover_extention = $cover_file->extension();
                $cover_name = date('dmyhis') . '.' . $cover_extention;
                $cover_file->move(public_path('/assets/img/cover/categories/'), $cover_name);

                File::delete(public_path('/assets/img/cover/categories/'. $category->cover));
                $data_category_update['cover'] = $cover_name;
        }

        $category->update($data_category_update);

        return redirect('/admin/category')->with('success', 'one category was successfully updated');

    }


    // destroy function 
    public function destroy(Category $category){
        File::delete(public_path('/assets/img/cover/categories/'.$category->cover));
        $category->delete();
        return back()->with('success', 'one category has been successfully deleted');
    }
}
