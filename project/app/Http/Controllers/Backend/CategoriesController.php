<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        // return $categories;
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
