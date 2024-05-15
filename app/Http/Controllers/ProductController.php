<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Barang::all();

        return view('add', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $number = mt_rand(0000000000, 9999999999);
        $request['code'] = $number;
        Barang::create($request->all());

        return redirect('/add');
    }

    public function edit($id)
    {
        $product = Barang::findOrFail($id);

        return view('edit', compact('product'));
    }

    // Mengupdate data produk
    public function update(Request $request, $id)
    {
        $product = Barang::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    // Menghapus data produk
    public function destroy($id)
    {
        $product = Barang::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function validasi(Request $request)
    {
        $qrCode = $request->input('qr_code');
        $products = Barang::where('code', $qrCode)->first();

        if ($products) {
            $tanggalDatang = Carbon::parse($products->tgl_masuk_barang);
            $umurBarang = $tanggalDatang->diffInDays(Carbon::now());

            return response()->json([
                'status' => 200,
                'redirect' => route('result'),
                'products' => $products,
                'umur' => $umurBarang,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Barang tidak ditemukan',
            ]);
        }
    }
}
