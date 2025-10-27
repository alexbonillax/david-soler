<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DesaOrdersController extends Controller
{
    public function index()
    {
        $limit = request()->input('numOrderLimit', 1000);
       $orders = Order::query()->with('customer:id,name')
           //->select(['customer_id','code','created_at','net_amount'])
           ->take($limit)
           ->orderBy('id','desc')
           ->get(['customer_id','code','created_at','net_amount']);

//        $limit = request()->input('numOrderLimit', 1000);
//        $orders = DB::table('orders')
//            ->join('customers', 'orders.customer_id', '=', 'customers.id')
//            ->select('orders.code as orderCode', 'customers.name as customerName', 'orders.created_at as orderDate', 'orders.net_amount as orderAmount')
//            ->limit($limit)
//            ->orderBy('orders.id', 'desc')
//            ->get();

        //dd($orders);
        $customers = Customer::query()->withCount('orders')->take(3)->get();
        return view('desaorders', compact('orders','customers'));
    }
}

