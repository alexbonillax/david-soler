<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $ordersPorMes = Order::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
            ->whereYear('created_at', 2025)
            ->groupBy('mes')
            ->orderBy('mes')
            ->pluck('total', 'mes')
            ->toArray();


        $nombresMeses = [];
        $totalesMeses = [];

        foreach ($ordersPorMes as $mes => $total) {
            $nombresMeses[] = match ((int) $mes) {
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
            $totalesMeses[] = $total;
        }

        return view('welcome', [
            'labelsMeses' => $nombresMeses,
            'totalesMeses' => $totalesMeses
        ]);
    }
}
