<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $ordersByMonth = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', 2025)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();


        $monthName = [];
        $totalMonth = [];

        foreach ($ordersByMonth as $month => $total) {
            $monthName[] = match ((int)$month) {
                1 => 'Enero',
                2 => 'Febrero',
                3 => 'Marzo',
                4 => 'Abril',
                5 => 'Mayo',
                6 => 'Junio',
                7 => 'Julio',
                8 => 'Agosto',
                9 => 'Septiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre',
            };
            $totalMonth[] = $total;
        }

        $totalYear = Order::whereYear('created_at', 2025)
            ->sum('net_amount');

        return view('welcome', [
            'labelsMonth' => $monthName,
            'totalMonth' => $totalMonth,
            'totalYear' => $totalYear
        ]);

    }
}
