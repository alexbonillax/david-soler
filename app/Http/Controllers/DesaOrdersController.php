<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DesaOrdersController extends Controller
{
    public function index()
    {

//        $orders = Order::query();
        //$orders = Order::query()->with(['customer'])->get();
        //$orders = Order::query()->whereNull('deleted_at')->get();
        //$customers = Customer::query()->whereNull('deleted_at')->get();
        //$orders = Order::query()->withExists('customer')->get();

        $limit = request()->input('numOrderLimit', 1000);
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.code as orderCode', 'customers.name as customerName', 'orders.created_at as orderDate', 'orders.net_amount as orderAmount')
            ->limit($limit)
            ->orderBy('orders.id', 'desc')
            ->get();

        return view('desaorders', compact('orders'));
    }
}
