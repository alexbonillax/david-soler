<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DesaOrdersController extends Controller
{
    public function index()
    {

        $limit = request()->input('numOrderLimit', 1000);

        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.code as orderCode', 'customers.name as customerName','orders.created_at as orderDate','orders.net_amount as orderAmount')
            ->limit($limit)
            //->limit(1000)
            ->orderBy('orders.id', 'desc')
            ->get();

        return view('desaorders', compact('orders'));
    }
}
