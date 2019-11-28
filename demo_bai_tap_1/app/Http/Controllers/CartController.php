<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::has('cart');
        return view('cart.list', compact('cart'));
    }

    public function addToCart(Request $request, $id)
    {
        $bill = Bill::find($id);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        $cart = new Cart($oldCart);
        $cart->add($bill, $bill->id);
        Session::put('cart', $cart);
        Session::flash('success', 'tao thanh cong san pham');
    }

    public function removeToCart($id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count(Session::get('cart')) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($id);
                Session::put('cart', $cart);
                Session::flash('success', 'xoa thanh cong');
            }
            Session::flash('delete-error', 'ban chua co gi trong gio');
        }
        Session::flash('delete-error', 'ban chua co gi trong gio');
    }

    public function updateToCart(Request $request, $id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count(Session::get('cart')) > 0) {
                $cart = new Cart($oldCart);
                $cart->update($request, $id);
                Session::put('cart', $cart);
                Session::flash('success', 'cap nhat thanh cong');
            }
            Session::flash('delete-error', 'ban chua co gi trong gio');
        }
        Session::flash('delete-error', 'ban chua co gi trong gio');
    }
}
