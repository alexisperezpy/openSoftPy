<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Models\User;
use App\Models\Provider;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('Purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        return view('admin.purchase.create', compact('providers'));
    }

    public function store(StoreRequest $request)
    {
        Purchase::create($request->all());
        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchases.show', compact('providers'));
    }
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }

}
