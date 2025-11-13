<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $orders = Order::with('customer')->take(10)->get();
        $pdf = Pdf::loadView('pdforders', compact('orders'));

        return $pdf->download('pedidos.pdf');
    }
}
