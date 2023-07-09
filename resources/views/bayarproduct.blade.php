@extends('layouts.app')
@section('css', '/css/detailproduct.css')
@section('content')

<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="fas fa-arrow-circle-up fa-3x" style="color: #8d0202;"></i></i></a>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h3 class="display-5 mb-3 animated slideInDown">Detail Product</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="/detailproduct/{{ $admin->id }}">Detail Product</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Payment Product</li>
                </ol>
            </nav>
        </div>
    </div>

<section class="detail-produk ">
    <div class="container">
        <a href="/detailproduct/{{ $admin->id }}"><i class="fa-solid fa-circle-arrow-left fa-3x"></i></a>
    </div>


    <div class="flex justify-center mt-38">   
            <div class="max-w-2lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="{{ asset('img/hero1.png') }}" alt="" />
            <div class="p-5">
            <h4 class="text-center mb-7">Pembayaran {{ $admin->namabarang }}</h4>
            <form action="{{ route('bayarproduk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="nohp">
                                   Nama 
                                </th>
                                <td class="px-6 py-4">
                                <input type="text" name="nama_user" value="{{ Auth::user()->name }}" required>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="nohp">
                                    Nomor HP
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="nohp" placeholder="Nomor HP" required>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="namakue">
                                    Nama Barang
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="nama_barang" value="{{ $admin->namabarang }}" readonly class="border-0">
                                </td>
                            </tr>                            
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Harga
                                </th>
                                <td class="px-7 py-4">
                                    Rp. {{ number_format($admin->harga, 0, ',', '.') }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="totalitem">
                                    Total Item
                                </th>
                                <td class="px-6 py-4">
                                    <input type="number" name="totalitem" placeholder="Total Item" value="1" required onchange="calculateTotal()">
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="totalharga">
                                    Total Harga
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" id="totalHarga" name="totalharga" value="{{ $admin->harga }}" readonly>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="namapenerima">
                                    Nama No Rekening
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="nama_rekening" placeholder="Nama No Rekening" required>
                                </td>
                            </tr>
                        </tbody>              
                    </table>

                    
                    <div>
                        <label for="message" class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="alamat">Masukan Alamat</label>
                        <textarea id="message" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulisan Alamat Anda Disini..." required></textarea>
                            
                        <label class="block my-2  text-sm font-medium text-gray-900 dark:text-white" for="multiple_files" for="buktipembayaran">Upload bukti transfer</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" name="buktipembayaran" required multiple>
                        <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-4">Konfirmasi Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    function calculateTotal() {
        const harga = parseFloat({{ $admin->harga }});
        let totalItem = parseFloat(document.getElementsByName('totalitem')[0].value);
        
        if (totalItem < 1) {
            totalItem = 1; // Set total item to 1 if it's less than 1
            document.getElementsByName('totalitem')[0].value = 1; // Update the input value
        }

        const totalHarga = harga * totalItem;
        document.getElementById('totalHarga').value = totalHarga;
    }
</script>

@endsection