<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;


class DashboardController extends Controller
{
    public function index()
    {

        $ordersByMonth = Order::whereYear('created_at', 2025)
            ->get()
            ->groupBy(function ($order) {
                return $order->created_at->month;
            })
            ->map(fn($orders) => $orders->count());


        $invoicesByMonth = Invoice::whereYear('created_at', 2025)
            ->get()
            ->groupBy(fn($invoice) => $invoice->created_at->month)
            ->map(fn($invoices) => [
                'total' => $invoices->count(),
                'billing' => $invoices->sum('amount')
            ]);


        $monthName = [];
        $totalMonth = [];
        $invoiceCountMonth = [];
        $billingMonth = [];

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
            $invoiceCountMonth[] = $invoicesByMonth[$month]['total'] ?? 0;
            $billingMonth[] = $invoicesByMonth[$month]['billing'] ?? 0;
        }

        $totalYear = Invoice::whereYear('created_at', 2025)->sum('amount');

        return view('welcome', [
            'labelsMonth' => $monthName,
            'totalMonth' => $totalMonth,
            'invoiceCountMonth' => $invoiceCountMonth,
            'billingMonth' => $billingMonth,
            'totalYear' => $totalYear
        ]);
    }
}
