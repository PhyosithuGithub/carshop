<?php

namespace App\Http\Controllers;
use App\Car;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cars =Car::all();
        $cates =Category::all();
        // dd($cates);
        return view('welcome',compact('cates','cars'));
    }

    public function show($id){
        $cars =Car::where('cat_id',$id)->get();// select id where to select brand
        $id_=$id;// if not $id, it is okay whatever you use it or not
        $cates =Category::all();
        $cat_name =Category::where('id',$id)->get();//show cate name on item list
        return view('singlebrand',compact('cates','cat_name','cars',$id_));
    }
// For Item Detail Start
    public function showDetail($id){
        $cates =Category::all();
        $car =Car::Where('id',$id)->First();
        return view('detail',compact('car','cates'));
    }
// FOr item Detail End
//##################################################################################
// For Cart Start
    public function add(Request $request,$id){// want to use session
       $items =array();

       if($request->session()->has('items')){
            $items =$request->session()->get('items');
            if(!in_array($id,$items)){
                array_push($items,$id);
            }
       }else{
           array_push($items,$id);
       }
       
       $request->session()->put('items',$items);
    //    $request->session()->flush();// delete session
      // to redirect
       $cars =Car::all();
        $cates =Category::all();
        return view('welcome',compact('cates','cars'));
    }

    public function showCart(Request $request){
        $cates =Category::all();
        $carts =$request->session()->get('items');// up
        // echo json_encode($carts);
        $products =[];
        for($i =0; $i<count($carts); $i++){
            $product =Car::find($carts[$i]);
            array_push($products,$product);
        }
        return view('showcart',compact('cates','products'));
    }

    public function checkOut(Request $request){
        $cates =Category::all();
        $carts =$request->session()->get('items');// up
        // echo json_encode($carts);
        $products =[];
        for($i =0; $i<count($carts); $i++){
            $product =Car::find($carts[$i]);
            array_push($products,$product);
        }
        return view('checkout',compact('cates','products'));
    }

    // For Cart End
}
