<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\product;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class productcontroller extends Controller
{
    function index()
    {
        $data = product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    function addTocart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    static function cartitem()
    {
        $userid = Session::get('user')['id'];
        return Cart::where('user_id', $userid)->count();
    }

    function cartlist()
    {
        $userid = Session::get('user')['id'];
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userid)
            ->select('products.*', 'carts.id as cart_id')
            ->get();
        return view('cartlist', ['products' => $products]);
    }


    function removecart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow()
    {
        $userid = Session::get('user')['id'];
        $total  = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $userid)
        ->sum('products.price');
        return view('ordernow', ['total' => $total]);
        
}
    function orderplaced(Request $req){
        $userid = Session::get('user')['id'];
        $cartitem = cart::where('user_id',$userid)->get();
        foreach($cartitem as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;            
            $order->save();
            cart::where('user_id',$userid)->delete();
        }
            return redirect('/');
    }
    function myorder(){
        $userid = Session::get('user')['id'];
        $order =  DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userid)
            ->get();
            return view('myorder',['order'=>$order]);
         }
               

        }