<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

class UserController extends Controller
{
    //
    public function ShowUser()
    {
        $users = User::all();
        return view('admin.user.ShowUser',compact('users'));
    }

    public function DeleteUser($id)
    {
        $users =Users::find(id);
        $users->delete();
        return redirect()->back();
    }
}
