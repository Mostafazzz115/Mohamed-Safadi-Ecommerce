<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        // return $categories;
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        // return $categories;
        return view('admin.categories.create', [
            'categories'  =>  $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->input('name') -- if there is a paramenter called name in url, wil be conflict
        // $request->post('name') -- best way 
        // $request->query('name') -- see only in form 
        // $request->name
        // $request['name']

        // $request->all()
        // $request->olny(['name', 'image'])
        // $request->except(['name', 'image'])

        // PRG : is to change the post method to get method after finishing the proccess of fill data, you do this by redirect user to a page after the post request (store method) ends

        // Request Merge : is to add an additional data to the data you recieved before storing it to DB 

        $request->merge([
            'slug' => Str::slug($request->name),
        ]);
        Category::create($request->except('_token'));
        return redirect()->route('dashboard.categories.index')->with('success', 'category addedd successfully');
        // return $request;


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $currentCategory = Category::where('slug', $slug)->first();
        $parent_categories = Category::select(['id', 'name', 'parent_id'])
        ->where('id', '<>', $currentCategory->id)
        ->where(function($query) use($currentCategory) {
            $query->where('parent_id', '<>', $currentCategory->id)->orWhere('parent_id', null);
        })->get();
        // return view('admin.categories.edit', compact('currentCategory', 'parent_categories'));
        return $parent_categories;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $currentCategory = Category::findorfail($id);
        $currentCategory->update($request->except('_token'));
        return redirect()->route('dashboard.categories.index')->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('dashboard.categories.index')->with('success', 'category Deleted successfully');
    }
}
