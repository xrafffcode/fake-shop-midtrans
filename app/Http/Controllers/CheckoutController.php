<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{


    public function process(Request $request)
    {
        $data = $request->all();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'product_id' => $data['product_id'],
            'price' => $data['price'],
            'status' => 'pending',
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function checkout(Transaction $transaction)
    {
        $products = config('products');
        $product = collect($products)->firstWhere('id', $transaction->product_id);

        return view('checkout',  compact('transaction', 'product'));
    }
}
