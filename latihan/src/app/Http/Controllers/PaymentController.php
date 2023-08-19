<?php

namespace App\Http\Controllers;

// use App\Models\Payment;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $payment = payment::create([
            'username' => $request->username,
            'amount' => $request->amount
        ]);


        $request->validate([
            'username' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);



        return redirect()->route('payment.success');
    }

    public function index()
    {
        $data = DB::table('payments')->latest()->first();


        return view('success', [
            'data' => $data
        ]);
    }
}
