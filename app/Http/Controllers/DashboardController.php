<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if(request()->ajax())
        {
            $query = TransactionItem::with(['product','transaction'])->get();

            return DataTables::of($query)
            ->editColumn('product.price', function($item){
                return number_format($item->product->price );
            })
            ->rawColumns(['action'])
            ->make();
        }

        $product = Product::count();
        $product1 = Product::count('category');
        $transaction = TransactionItem::count();
        $pesanan = Transaction::where('status',"PENDING")->count();
        $pesanan1 = Transaction::where('status',"FAILED")->count();
        $pesanan2 = Transaction::where('status',"CANCELED")->count();

        $transaction1 = Transaction::all();

        $revenue = $transaction1->reduce(function($carry, $item) {
            return $carry + $item->total_price * $item->porsi;
        });



        $customer = User::count();
        return view('dashboard' ,[

            'product'   => $product,
            'product1'   => $product1,
            'revenue' => $revenue,
            'transaction' => $transaction,
            'transaction1' => $transaction1,
            'customer' => $customer,
            'pesanan' => $pesanan,
            'pesanan1' => $pesanan1,
            'pesanan2' => $pesanan2,
        ]);


    }
}
