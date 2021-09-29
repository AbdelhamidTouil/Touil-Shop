<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        $categories = Category::all();
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
             return view('home',compact('products','categories'));
        }
       
     }

     public function redirect(){

        $usertype=Auth::user()->usertype;
        $products = Product::all();
        $categories = Category::all();
        if($usertype=='1')
        {
            return view('admin.admindashbord');
        }
        else
        {
            $user_id = Auth::id();
            $count = Cart::where('user_id',$user_id)->count();
            return view('home',compact('products','count','categories'));
        }
     }
// start cart
public function cart( Request $request,$id)
{
    $count =Cart::select('*')->where('user_id',$id)->count();
    $products2 = Cart::select('*')->where('user_id', '=' , $id)->get();
    $products = Cart::where('user_id',$id)->join('products','carts.Product_id','=','products.id')->get();
    return view('cart',compact('products','count','products2'));
}

public function storecart(Request $request,$id)
{
    if(Auth::id())
    {
        $product_id=$id;
        $user_id=Auth::id();
        $quantity = $request->quantity;


        $carts = new Cart;
        $carts->product_id =$product_id;
        $carts->user_id =$user_id;
        $carts->quantity = $request->quantity;
        $carts->save();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
  
}
    
     public function a()
     {
         return redirect('dashboard');
     }

     //product description//
     public function product_description($id)
     {
        
        $product_des = Product::find($id);
        $count =Cart::select('*')->where('user_id',$id)->count();
        return view('product_description',compact('product_des','count'));

     }
    
     public function deletecart($id)
     {
         $products = Cart::find($id);
         $products->delete();
         return  redirect()->back();
     }

     public function product_category($id)
     {$count =Cart::select('*')->where('user_id',$id)->count();
         $products = Category::find($id);

         return view('product_category',compact('products','count'));
     }

     // start search //
     public function search(Request $request)
     {   $count =Cart::select('*')->where('user_id')->count();
         $search = $request->search;
         $products = Product::where('name','like','%'.$search.'%')->get();
 
        return view('search',compact('products','count'));
     }
}
