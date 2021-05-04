<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function details($id)
    {
        $data=Product::find($id);
        return view('details',['product'=>$data]);
    }
    function search(Request $req)
    {
        // return $req->input();
        $data=Product::where('name','like','%'.$req->input('prd').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("CartList");
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }
    function CartList()
    {
        $userId=Session::get('user')['id'];
        $product=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        $total=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('CartList',['product'=>$product,'totals'=>$total]);
    }
    function removecart($id)
    {
        cart::destroy($id);
        return redirect('CartList');
    }
    function ordernow()
    {
        if(Session::has('user'))
        {
            $userId=Session::get('user')['id'];
            $total=DB::table('cart')
            ->join('products','cart.product_id','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');
            if($total==!null)
            {
            return view('ordernow',['totals'=>$total]);
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
    function orderPlace(Request $req)
    {
        if(Session::has('user'))
        {
            $userId=Session::get('user')['id'];
            $item=cart::where('user_id',$userId)->get();
            foreach($item as $itm)
            {
                $order=new order;
                $order->product_id=$itm['product_id'];
                $order->user_id=$itm['user_id'];
                $order->name=$req->name;
                $order->mobile=$req->mobile;
                $order->address=$req->address;
                $order->payment_method=$req->Payment_Method;
                $order->status="Placed";
                $order->payment_status="Success";
                $order->save();
                cart::where('user_id',$userId)->delete();
            }
            return redirect('/');
        }
    }
}