<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class DesaCouponsController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:5',
            'name' => 'required|string|max:255',
            'is_assigned_to_customer' => 0,
        ]);

        $coupon = Coupon::create($request->all());
        return redirect()->route('coupons.index');
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('coupons.edit', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|string|max:5',
            'name' => 'required|string|max:255',
        ]);

        $coupon = Coupon::findOrFail($id);
        $coupon->update($request->all());
        return redirect()->route('coupons.index');
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return redirect()->route('coupons.index');
    }
}
