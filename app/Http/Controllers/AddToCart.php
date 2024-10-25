<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCart extends Controller
{

    public function addToCart_get()
    {
        return view('custom_productaddToCart');
    }
    public function addToCart(Request $request)
    {

        if (!session('user')) {

            return redirect()->route('login')->with('error', 'First, you need to log in, then you can buy something.');
        }

        // $formData = session()->get('formData');
        $formData = $request->all();
        $price = $request->input('price');
        $shirtPaintQuantities = $request->input('shirt_paint_quantity');
        $quantities = $request->input('quantity');

        $totalPrice = 0;
        $totalQuantity = 0;


        $mergedQuantities = array_map(function ($a, $b) {
            return $a + $b;
        }, $shirtPaintQuantities, $quantities);


        foreach ($mergedQuantities as $quantity) {
            $totalPrice += $price * $quantity;
            $totalQuantity += $quantity;
        }
        // strore pricw in session for payment
        session(['totalPrice' => $totalPrice]);

        // Form data ko bhi session mein store karen
        session(['formData' => $formData]);



        return view('custom_product_addToCart', compact('formData', 'totalPrice', 'totalQuantity'));
    }

    // checkout function
    public function checkout()
    {
        return view('checkout');
    }
}
