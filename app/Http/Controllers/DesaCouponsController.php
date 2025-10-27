<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Facades\App;

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

    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', compact('coupon'));
    }

    public function save(Coupon $coupon, Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:5',
            'name' => 'required|string|max:255',
        ]);

        $coupon->code = $request->input('code');
        $coupon->setTranslation('name', App::getLocale(), $request->input('name'));

        if ($coupon->exists) {
            $coupon->updated_at = now();
        } else {
            $coupon->is_assigned_to_customer = false;
            $coupon->created_at = now();
        }

        $coupon->save();

        return redirect()->route('coupons.index')->with('success', $coupon->wasRecentlyCreated ? 'Cupón creado correctamente.' : null);
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return redirect()->route('coupons.index');
    }
}
