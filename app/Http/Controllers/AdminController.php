<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Order;

class AdminController extends Controller
{
    public function __construct() {
        $this->Admin = new Admin();
        $this->Order = new Order();
    }
    public function index ()
    {
        return view ('adminside.dashboard');
    }

    public function pakaian ()
    {
        $data = [
            'pakaian' => $this->Admin->where('kategori', 'pakaian')->get(),
            'totalpakaian' => $this->Admin->where('kategori', 'pakaian')->count(),
        ];
        return view ('adminside.v_pakaian', $data);
    }
    
    public function detailpakaian ($id)
    {
        if (!$this ->Admin->detailData($id)){
            abort(404);
        }
        $data = [
            'pakaian' => $this ->Admin->detailData($id),
        ];
        return view ('adminside.v_detailpakaian', $data);
    }

    public function addpakaian()
    {
        return view ('adminside.v_addpakaian');
    }
    public function insertpakaian()
    {
        Request()->validate([
            'id' => 'required|unique:admins,id|min:1|max:6',
            'namabarang' => 'required|max:100',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'kategori' => 'required|max:25',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,webp|max:100',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namabarang.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        $data = [
            'id' => Request()->id,
            'namabarang' => Request()->namabarang,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'kategori' => Request()->kategori,
            'deskripsi' => Request()->deskripsi,
            'gambar' => $fileName,
        ];

        $this->Admin->addData($data);
        return redirect()->route('pakaian')->with('pesan','Data Berhasil Di Tambahkan !!');
    }
    public function editpakaian($id)
    {
        if (!$this->Admin->detailData($id)) {
            abort(404);
        }
        $data = [
            'pakaian'=> $this->Admin->detailData($id),
        ];
        return view ('adminside.v_editpakaian', $data);
    }
    public function updatepakaian($id)
    {
        Request()->validate([
            'id' => 'required|min:1|max:6',
            'namabarang' => 'required|max:100',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'kategori' => 'required|max:25',
            'deskripsi' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,webp|max:100',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->gambar <> "") {
        //jika ingin ganti foto
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namabarang.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        $data = [
            'id' => Request()->id,
            'namabarang' => Request()->namabarang,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'kategori' => Request()->kategori,
            'deskripsi' => Request()->deskripsi,
            'gambar' => $fileName,
        ];

        $this->Admin->editData($id, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
                'id' => Request()->id,
                'namabarang' => Request()->namabarang,
                'stock' => Request()->stock,
                'harga' => Request()->harga,
                'kategori' => Request()->kategori,
                'deskripsi' => Request()->deskripsi,
            ];
            $this->Admin->editData($id, $data);
        }
        return redirect()->route('pakaian')->with('pesan','Data Berhasil Di Update !!');
    }
    public function deletepakaian($id)
    {
        //hapus foto
        $pakaian = $this->Admin->detailData($id);
        if ($pakaian->gambar <> "") {
            unlink(public_path('foto_produk') . '/' . $pakaian->gambar);
        }   
        $this->Admin->deleteData($id);
        return redirect()->route('pakaian')->with('pesan','Data Berhasil Di Hapus !!');

    }
    
//////////////////////////////////////Makanan/////////////////////////////////////////////
    public function makanan ()
    {
        $data = [
            'makanan' => $this->Admin->where('kategori', 'makanan')->get(),
            'totalmakanan' => $this->Admin->where('kategori', 'makanan')->count(),
        ];
        return view ('adminside.v_makanan', $data);
    }

    public function detailmakanan ($id)
    {
        if (!$this ->Admin->detailData($id)){
            abort(404);
        }
        $data = [
            'makanan' => $this ->Admin->detailData($id),
        ];
        return view ('adminside.v_detailmakanan', $data);
    }

    public function addmakanan()
    {
        return view ('adminside.v_addmakanan');
    }
    public function insertmakanan()
    {
        Request()->validate([
            'id' => 'required|unique:admins,id|min:1|max:6',
            'namabarang' => 'required|max:100',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'kategori' => 'required|max:25',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,webp|max:100',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namabarang.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        $data = [
            'id' => Request()->id,
            'namabarang' => Request()->namabarang,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'kategori' => Request()->kategori,
            'deskripsi' => Request()->deskripsi,
            'gambar' => $fileName,
        ];

        $this->Admin->addData($data);
        return redirect()->route('makanan')->with('pesan','Data Berhasil Di Tambahkan !!');
    }
    public function editmakanan($id)
    {
        if (!$this->Admin->detailData($id)) {
            abort(404);
        }
        $data = [
            'makanan'=> $this->Admin->detailData($id),
        ];
        return view ('adminside.v_editmakanan', $data);
    }
    public function updatemakanan($id)
    {
        Request()->validate([
            'id' => 'required|min:1|max:6',
            'namabarang' => 'required|max:100',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'kategori' => 'required|max:25',
            'deskripsi' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,webp|max:100',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->gambar <> "") {
        //jika ingin ganti foto
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namabarang.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        $data = [
            'id' => Request()->id,
            'namabarang' => Request()->namabarang,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'kategori' => Request()->kategori,
            'deskripsi' => Request()->deskripsi,
            'gambar' => $fileName,
        ];

        $this->Admin->editData($id, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
                'id' => Request()->id,
                'namabarang' => Request()->namabarang,
                'stock' => Request()->stock,
                'harga' => Request()->harga,
                'kategori' => Request()->kategori,
                'deskripsi' => Request()->deskripsi,
            ];
            $this->Admin->editData($id, $data);
        }
        return redirect()->route('makanan')->with('pesan','Data Berhasil Di Update !!');
    }
    public function deletemakanan($id)
    {
        //hapus foto
        $makanan = $this->Admin->detailData($id);
        if ($makanan->gambar <> "") {
            unlink(public_path('foto_produk') . '/' . $makanan->gambar);
        }   
        $this->Admin->deleteData($id);
        return redirect()->route('makanan')->with('pesan','Data Berhasil Di Hapus !!');

    }
//////////////////////////////////////Alat/////////////////////////////////////////////
public function alat ()
{
    $data = [
        'alat' => $this->Admin->where('kategori', 'alat')->get(),
        'totalalat' => $this->Admin->where('kategori', 'alat')->count(),
    ];
    return view ('adminside.v_alat', $data);
}

public function detailalat ($id)
{
    if (!$this ->Admin->detailData($id)){
        abort(404);
    }
    $data = [
        'alat' => $this ->Admin->detailData($id),
    ];
    return view ('adminside.v_detailalat', $data);
}

public function addalat()
{
    return view ('adminside.v_addalat');
}
public function insertalat()
{
    Request()->validate([
        'id' => 'required|unique:admins,id|min:1|max:6',
        'namabarang' => 'required|max:100',
        'stock' => 'required|integer',
        'harga' => 'required|integer',
        'kategori' => 'required|max:25',
        'deskripsi' => 'required',
        'gambar' => 'required|mimes:jpg,jpeg,png,webp|max:100',
    ],[
        'id.required' => 'wajib diisi !!',
        'id.unique' => 'id Sudah Ada !!',
        'id.min' => 'Min 1 Karakter',
        'id.max' => 'Max 6 Karakter'
    ]);

    //jika validasi tidak ada maka lakukan simpan data
    //upload photo
    $file = Request()-> gambar;
    $fileName = Request()->namabarang.'.'.$file->extension();
    $file->move(public_path('foto_produk'), $fileName);

    $data = [
        'id' => Request()->id,
        'namabarang' => Request()->namabarang,
        'stock' => Request()->stock,
        'harga' => Request()->harga,
        'kategori' => Request()->kategori,
        'deskripsi' => Request()->deskripsi,
        'gambar' => $fileName,
    ];

    $this->Admin->addData($data);
    return redirect()->route('alat')->with('pesan','Data Berhasil Di Tambahkan !!');
}
public function editalat($id)
{
    if (!$this->Admin->detailData($id)) {
        abort(404);
    }
    $data = [
        'alat'=> $this->Admin->detailData($id),
    ];
    return view ('adminside.v_editalat', $data);
}
public function updatealat($id)
{
    Request()->validate([
        'id' => 'required|min:1|max:6',
        'namabarang' => 'required|max:100',
        'stock' => 'required|integer',
        'harga' => 'required|integer',
        'kategori' => 'required|max:25',
        'deskripsi' => 'required',
        'gambar' => 'mimes:jpg,jpeg,png,webp|max:100',
    ],[
        'id.required' => 'wajib diisi !!',
        'id.unique' => 'id Sudah Ada !!',
        'id.min' => 'Min 1 Karakter',
        'id.max' => 'Max 6 Karakter'
    ]);

    //jika validasi tidak ada maka lakukan simpan data
    if (Request()->gambar <> "") {
    //jika ingin ganti foto
    //upload photo
    $file = Request()-> gambar;
    $fileName = Request()->namabarang.'.'.$file->extension();
    $file->move(public_path('foto_produk'), $fileName);

    $data = [
        'id' => Request()->id,
        'namabarang' => Request()->namabarang,
        'stock' => Request()->stock,
        'harga' => Request()->harga,
        'kategori' => Request()->kategori,
        'deskripsi' => Request()->deskripsi,
        'gambar' => $fileName,
    ];

    $this->Admin->editData($id, $data);
    }else {
        //jika tidak ingin ganti foto
        $data = [
            'id' => Request()->id,
            'namabarang' => Request()->namabarang,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'kategori' => Request()->kategori,
            'deskripsi' => Request()->deskripsi,
        ];
        $this->Admin->editData($id, $data);
    }
    return redirect()->route('alat')->with('pesan','Data Berhasil Di Update !!');
    }
    public function deletealat($id)
    {
        //hapus foto
        $alat = $this->Admin->detailData($id);
        if ($alat->gambar <> "") {
            unlink(public_path('foto_produk') . '/' . $alat->gambar);
        }   
        $this->Admin->deleteData($id);
        return redirect()->route('alat')->with('pesan','Data Berhasil Di Hapus !!');

    }

/////////////////////////////////////////////////Order//////////////////////////////

    public function showorder()
    {
        $data = [
            'order' => $this->Order->allData(),
            'totalpesanan' => $this->Order->allData()->count(),
        ];
        return view('adminside.pesanan', $data);
    }

    public function detailorder($id)
    {
        if (!$this->Order->detailDataOrder($id)) {
            abort(404);
        }
    
        $data = [
            'order' => $this->Order->detailDataOrder($id),
        ];
    
        return view('adminside.detailpesanan', $data);
    }
    

    public function deletepesanan($id)
    {
        // hapus foto
        $order=$this ->Order->detailDataOrder($id);
        if($order -> buktipembayaran <>""){
            unlink(public_path('buktipembayaran').'/'.$order -> buktipembayaran);
        }
        $this->Order->deleteDataOrder($id);
        return redirect()->route('daftarpesanan')->with('pesan', 'Data berhasil di hapus');
    }

    public function updatestatus($id)
    {
        $validated = Request()->validate([
            "status_pembayaran" => "required|in:Menunggu Pembayaran,Pembayaran Diterima,Pembayaran Ditolak",
        ]);

        $order = Order::find($id);
        $order->status_pembayaran = Request()->status_pembayaran;
        $order->save();

        return back()->with("pesan", "Status berhasil diperbarui");
    }

}