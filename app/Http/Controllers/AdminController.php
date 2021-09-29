<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Contact;

class AdminController extends Controller
{
     /////////////////////////******************      Start Category    ****************////////////////////////////
      // /* start admin Category //
     public function admincategory()
     {
         $categories = Category::all();
         return view('admin.admincategory',compact('categories'));
     }
      // */ end admin Category //

  // /* start insert Category //
    public function insertcategory(){
        return view('admin.insertcategory');
    }
    // */ End insert Category //

   
    // /* start  storecategory //
    public function storecategory(Request $request){
        $categories = new Category;


        $image =$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/categorie_image',$imagename);

        $categories->image =$imagename;
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->description = $request->description;
        $categories->status = $request->status == true? '1':'0';
        $categories->popular = $request->popular == true? '1':'0';
        $categories->meta_title = $request->meta_title;
        $categories->meta_descrip = $request->meta_descrip;
        $categories->meta_keyword = $request->meta_keyword;
       
        $categories->save();
        
       return redirect()->back();
    }
    // */ End  storecategory //

    public function updatecategory(Request $request,$id){
        $categories = Category::find($id);

        $image =$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/categorie_image',$imagename);

        $categories->image =$imagename;
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->description = $request->description;
        $categories->status = $request->status == true? '1':'0';
        $categories->popular = $request->popular == true? '1':'0';
        $categories->meta_title = $request->meta_title;
        $categories->meta_descrip = $request->meta_descrip;
        $categories->meta_keyword = $request->meta_keyword;
       
        $categories->save();
        
       return redirect()->back();
    }


    
    public function editcategory($id)
    {
        $categories =Category::find($id);
        return view('admin.editcategory',compact('categories'));
    }

/////////////////////////******************      End Category    ****************////////////////////////////


/////////////////////////******************      Start Product    ****************////////////////////////////
    public function insertproduct(){
        $categories = Category::all();
        return view('admin.insertproduct',compact('categories'));
    }
    
    public function storeproduct(Request $request){
        $products = new product;


        $image =$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/products_image',$imagename);
   

        $products->image =$imagename;
        $products->cate_id =$request->cate_id;
        $products->name = $request->name;
        $products->slug = $request->slug;
        $products->small_description = $request->small_description;
        $products->description = $request->description;
        $products->original_price =$request->original_price;
        $products->selling_price =$request->selling_price;
        $products->qte =$request->qte;
        $products->tax = $request->tax;
        $products->status = $request->status == true? '1':'0';
        $products->trending = $request->trending == true? '1':'0';
        $products->meta_title = $request->meta_title;
        $products->meta_keywords = $request->meta_keywords;
        $products->meta_description = $request->meta_description;
       
        $products->save();
        
       return redirect()->back();
    }



    public function adminproduct()
    {
$products = Product::all();
return view('admin.adminproduct',compact('products'));
    }



    public function editproduct($id)
    {
$products =Product::find($id);
$categories =Category::all();

return view('admin.editproduct',compact('products','categories'));
    }


    public function updateproduct(Request $request ,$id){
        $products = Product::find($id);


        $image =$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/products_image',$imagename);
   

        $products->image =$imagename;
        $products->cate_id =$request->cate_id;
        $products->name = $request->name;
        $products->slug = $request->slug;
        $products->small_description = $request->small_description;
        $products->description = $request->description;
        $products->original_price =$request->original_price;
        $products->selling_price =$request->selling_price;
        $products->qte =$request->qte;
        $products->tax = $request->tax;
        $products->status = $request->status == true? '1':'0';
        $products->trending = $request->trending == true? '1':'0';
        $products->meta_title = $request->meta_title;
        $products->meta_keywords = $request->meta_keywords;
        $products->meta_description = $request->meta_description;
       
        $products->save();
        
       return redirect()->back();
    }

    public function deleteproduct($id)
    {
     $products =Product::find($id);
     $products->delete();
     return redirect()->back();
    }

    public function deletecategory($id)
    {
     $categories =Category::find($id);
     $categories->delete();
     return redirect()->back();
    }
/////////////////////////******************      End Product    ****************////////////////////////////

    /////////// Start Checkout ////////
    
    public function checkout ()
    {
        $products = Cart::all();
        return view('checkout ',compact('products'));
    }
   /////////// End Checkout ////////



/* start contact */
public function contact ()
{
    $contact =Contact::all();
    return view('admin.contact.contact',compact('contact'));
}

public function storecontact(Request $request)
{
    
    $contact = new Contact;
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();
    return  redirect()->back();
}

public function deletecontact($id)
{
    $contact = Contact::find($id);
    $contact->delete();
    return redirect()->back();
}
/* end contact */




}
