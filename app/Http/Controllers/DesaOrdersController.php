<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DesaOrdersController extends Controller
{
    public function index()
    {

        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.id as orderId', 'customers.name as customerName')
            ->limit(1000)
            ->orderBy('orders.id', 'desc')
            ->get();

        return view('desaOrders', compact('orders'));
    }
}
