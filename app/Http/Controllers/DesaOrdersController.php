<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;

class DesaOrdersController extends Controller
{
    public function index()
    {
        $orderLimit = request()->input('numOrderLimit', 3);
        $orders = Order::query()->with('customer:id,name')
           //->select(['customer_id','code','created_at','net_amount'])
           ->take($orderLimit)
           ->orderBy('id','desc')
           ->get(['customer_id','code','created_at','net_amount']);

//        $orderLimit = request()->input('numOrderLimit', 1000);
//        $orders = DB::table('orders')
//            ->join('customers', 'orders.customer_id', '=', 'customers.id')
//            ->select('orders.code as orderCode', 'customers.name as customerName', 'orders.created_at as orderDate', 'orders.net_amount as orderAmount')
//            ->orderLimit($orderLimit)
//            ->orderBy('orders.id', 'desc')
//            ->get()
//          dd($orders);

        $customerLimit= request()->input('customerLimit', 3);
        $customers = Customer::query()->withCount('orders')->take($customerLimit)->cursorPaginate(5);
        return view('desaorders', compact('orders','customers'));
    }

    public function index2()
    {
        $orderLimit = request()->input('numOrderLimit', 10);
        $orders = Order::with(['customer', 'orderProducts.product', 'orderProducts.unit'])->take($orderLimit)->cursorPaginate(5);
        return view('desaorders2', compact('orders'));
    }

}


