<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('sort_by', 'Product')->get();
        return view('admin.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->user_id = Auth::User()->id;
        $category->status = 'true';
        $category->view = $data['view'];
        $category->sort_by = $data['sort_by'];
        $category->icon = $data['icon'];
        $category->parent = $data['parent'];
        $category->name = $data['name'];
        $category->content = $data['content'];
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->slug = Str::slug($data['name'], '-');
        $category->save();
        return redirect('admin/category')->with('success','updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        $category = Category::where('sort_by', 'Product')->get();
        return view('admin.category.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $category = Category::find($id);
        $category->view = $data['view'];
        $category->icon = $data['icon'];
        $category->parent = $data['parent'];
        $category->name = $data['name'];
        $category->content = $data['content'];
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->slug = $data['slug'];
        $category->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
