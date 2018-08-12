<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
use App\Product;

class ShoppingController extends Controller
{
    public function add_to_cart(){
        
        $pdt = Product::find(request()->product_id);
        
        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price
            
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('cart');
    }

    public function cart(){
        // Cart::destroy()
        return view('cart');
    }

    public function cart_delete($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function checkout(){
        return view('checkout');
    }
}
