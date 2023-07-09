<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->product = new Admin();
        $this->order = new Order();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data = [
            "admin" => $this->product->get()
        ];
        return view('index', $data);
    }

    public function showproductdetail($id){
        
        $data = [
            "admin" => $this->product->detailData($id)
        ];

        return view('detailproduct', $data);
    }

    public function showpembayaranproduct($id)
    {
        $data = [
            "admin" => $this->product->detailData($id)
        ];
        return view('bayarproduct', $data);
    }
    
    public function bayarproduct(){
        Request()->validate([
            'nama_user' => 'required',
            'nohp' => 'required',
            'nama_barang' => 'required',
            'totalitem' => 'required|integer',
            'totalharga' => 'required|integer',
            'nama_rekening' => 'required',
            'alamat' => 'required',
            'buktipembayaran' => 'required|mimes:jpg,jpeg,png,webp|max:1000',
        ], [
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter',
        ]);

        //upload photo
        $file = Request()-> buktipembayaran;
        $fileName = Request()->namapenerima.'.'.$file->extension();
        $file->move(public_path('buktipembayaran'), $fileName);

        $userId = auth()->user()->id;

        $data = [
            'id' => Request()->id,
            'nama_user' => Request()->nama_user,
            'nohp' => Request()->nohp,
            'nama_barang' => Request()->nama_barang,
            'totalitem' => Request()->totalitem,
            'totalharga' => Request()->totalharga,
            'nama_rekening' => Request()->nama_rekening,
            'alamat' => Request()->alamat,
            'buktipembayaran' => $fileName,
            'id_user' => $userId,
        ];

        $this->order->addData($data);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Ditambahkan !!');
    }

    public function checkout()
    {
        $userId = auth()->user()->id;

        $data = [
            "order" => $this->order->get()
        ];
        
        return view('checkout', $data);
    }
}
