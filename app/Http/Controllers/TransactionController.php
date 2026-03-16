<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('components.admin.transaction.index');
    }

    Public function show()
    {
        return view('components.admin.transaction.show');
    }

    Public function create()
    {
      return view('components.admin.transaction.create');
    }

    public function store()
    {
      $validated = request()->validate([
        'date' => 'required',
        'type' => 'required',
        'amount' => 'required',
        'description' => ['nullable', 'string'],
        'booking_reference' => ['nullable', 'string'],
        'address' => ['nullable', 'string'],
        'service' => ['nullable', 'string'],
        'distance' => ['nullable', 'string'],
        'exp_shop' => ['nullable', 'string'],
        'exp_product' => ['nullable', 'string'],
      ]);

      try{
        Transaction::create([
          'date' => $validated['date'],
          'type' => $validated['type'],
          'amount' => $validated['amount'],
          'user_id' => auth()->user()->id,

          // income
          'description' => $validated['description'],
          'booking_reference' => $validated['booking_reference'],
          'address' => $validated['address'],
          'service' => $validated['service'],
          'distance' => $validated['distance'],
          // Expense
          'exp_shop' => $validated['exp_shop'],
          'exp_product' => $validated['exp_product'],
        ]);
      } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Transaction creation failed: ' . $e->getMessage());
      }

      return redirect()->back()->with('success', 'Transaction created successfully');
    }
}
