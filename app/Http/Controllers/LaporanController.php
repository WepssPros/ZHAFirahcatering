<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Transaction::query();

            return DataTables::of($query)

            ->addColumn('action', function($item){
                return '
              ';
            })
            ->editColumn('total_price', function($item){
                return ($item->total_price * $item->porsi);
            },
            )
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        if(request()->ajax())
        {
            $query = TransactionItem::with(['product','transaction'])->get();

            return DataTables::of($query)
            ->editColumn('product.price', function($item){
                return number_format($item->product->price);
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.laporan.show');
    }







    public function edit(Transaction $transaction)
    {
        return view('pages.dashboard.laporan.edit',[
            'item' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
      *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $transaction->update($data);

        return redirect()->route('dashboard.laporan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
