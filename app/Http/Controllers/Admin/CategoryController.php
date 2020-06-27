<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsertCategoryFormRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates =Category::all();
        // dd($cates);
        return view('backend.category.index',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertCategoryFormRequest $request)
    {
        $cats =Category::create([
            'brand'=>$request->get('brand'),
        ]);
        return redirect('admin/category/create')->with('status','Created Category Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate =Category::find($id);
        return view('backend.category.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertCategoryFormRequest $request, $id)
    {
        $cate =Category::whereId($id)->firstOrFail();
        // $cate =Category::find($id);
        $cate->brand =$request->get('brand');
        $cate->update();
        return redirect(action('admin\CategoryController@edit',$id))->with('status','Updated Category Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d_cate =Category::whereId($id)->firstOrfail();
        $d_cate->delete();
        return redirect(action('admin\CategoryController@index',$id))->with('status','Delete Data Successfully!');
    }
}
