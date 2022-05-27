<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\True_;

class CategoryController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title)
    {
        if ($category->parent_id == 0) {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;

        return CategoryController::getParentsTree($parent, $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view("layouts.category.index",[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.create');
    }

    public function edit(Category $category,$id){

        $data = Category::find($id);
        return view("layouts.category.edit",[
            'data'=> $data
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data=new Category();
        $data->parent_id = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description =$request->description;
        $data->status = $request->status ;
        //$request->status;
        $data->save();
        return  redirect('admin/category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Category $category,$id)
    {
       echo ("sa");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function showing_edit(Request $request, Category $category, $id)
    {
        $user = $request->session()->get('user_id');
        $data = DB::select('select * from categories');
        $category = DB::select('select * from categories where id = ?', [$id]);
        return view('admin.category_edit', ['user' => $user, 'data' => $data, 'category' => $category]);
    }

 /*   public function edit(Request $request, Category $category, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'parent' => 'required',
        ]);

        $parent_id = request()->input('parent');
        $title = request()->input('title');
        $keywords = request()->input('keywords');
        $description = request()->input('description');
        $slug = request()->input('slug');
        $status = request()->input('status');
        $update = DB::table('categories')
            ->where('id', $id)
            ->update(['parent_id' => $parent_id, 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'slug' => $slug, 'status' => $status]);
        return redirect()->route('admin_panel_categories')->with('success', 'Category Updated');
    }
*/
    public function show_adding(Request $request, Category $category)
    {
        $user = $request->session()->get('user_id');
        $data = DB::select('select * from categories');
        return view('admin.admin_category_add', ['user' => $user, 'data' => $data]);
    }

    public function adding_category(Request $request, Category $category)
    {
        $validation = $request->validate([
            'title' => 'required',
            'parent' => 'required',
        ]);

        $parent = $request->input('parent');
        $title = $request->input('title');
        $keywords = $request->input('keywords');
        $description = $request->input('description');
        $slug = $request->input('slug');
        $status = $request->input('status');
        DB::table('categories')->insert([
            'parent_id' => $parent,
            'title' => $title,
            'keywords' => $keywords,
            'description' => $description,
            'slug' => $slug,
            'status' => $status
        ]);
        return redirect()->route('admin_panel_categories')->with('success', 'Category Added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {

        $data = Category::find($id);
        $data->parent_id = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description =$request->description;
        $data->status = $request->status ;
        //$request->status;
        $data->save();
        return  redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category, $id)
    {
        DB::table('categories')->where('id', $id)->delete();
        DB::table('categories')->where('parent_id', $id)->delete();
        return redirect()->route('admin_panel_categories')->with('success', 'Category Deleted');
    }
}
