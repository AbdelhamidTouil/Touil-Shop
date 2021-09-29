<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class Ordercontroller extends Controller
{
    //
    public function orderconfirm(Request $request)
    {
        foreach($request->product_name as $key=>$product_name)
        {
            $products=new Order;
            $products->product_name=$product_name;
            $products->selling_price=$request->selling_price[$key];
            $products->quantity=$request->quantity[$key];
            $products->name=$request->name;
            $products->phone=$request->phone;
            $products->addresse=$request->addresse;
            $products->save();
        }
        return redirect()->back();
    }
}
