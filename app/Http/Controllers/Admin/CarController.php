<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsertCarFormRequest;
use App\Car;
use App\Category;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars =Car::all();
        // dd($cars);
        return view('backend.cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates =Category::all();
        return view('backend.cars.create',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertCarFormRequest $request)
    {
        $files =$request->file('file');
        $fileAry =[];
        foreach($files as $file){
           $filename= uniqid().'_'.$file->getClientOriginalName();
           array_push($fileAry,$filename);
           $file->move(public_path().'/uploads/',$filename);
        }
        
        Car::create([
            'cat_id'=>$request->get('category_id'),
            'year'=>$request->get('year'),
            'model'=>$request->get('model'),
            'type'=>$request->get('type'),
            'color'=>$request->get('color'),
            'price'=>$request->get('price'),
            'mileage'=>$request->get('mileage'),
            'fuel'=>$request->get('fuel'),
            'seat'=>$request->get('seat'),
            'image'=>serialize($fileAry),
        ]);
        return redirect('admin/car/create')->with('status','Insert Car Successfully!');
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
        $cate =Category::whereId($id)->FirstOrFail();
        $car =Car::find($id);
        return view('backend.cars.edit',compact('cate','car'));
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
        $car =Car::whereId($id)->FirstOrFail();
        $car->year =$request->get('year');
        $car->model =$request->get('model');
        $car->type =$request->get('type');
        $car->color =$request->get('color');
        $car->price =$request->get('price');
        $car->mileage =$request->get('mileage');
        $car->fuel =$request->get('fuel');
        $car->seat =$request->get('seat');
        $car->update();
        return redirect(action('admin\CarController@edit',$id))->with('status','Updated Data Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car =Car::find($id);
        $car->delete();
        return redirect(action('admin\CarController@index',$id))->with('status','Deleted Data Successfully!');
    }
}
