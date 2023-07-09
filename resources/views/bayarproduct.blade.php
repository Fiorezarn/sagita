@extends('layouts.app')
@section('css', '/css/detailproduct.css')
@section('content')

<section class="detail-produk ">
    <div class="container">
        <a href="/detailproduct"><i class="fa-solid fa-circle-arrow-left fa-3x"></i></a>
    </div>


    <div class="flex justify-center mt-38">   
        <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="{{ asset('img/hero1.png') }}" alt="" />
            <div class="p-5">

            <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xl">
                                    Pembayaran Product 1
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                            </tr>
                        </thead>
                           
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="nohp">
                                   Nama 
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="nohp" value="Nama Akun" required>
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
                                    <input type="text" name="namakue" value="product 1" readonly class="border-0">
                                </td>
                            </tr>                            
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Harga
                                </th>
                                <td class="px-6 py-4">
                                    Rp. 10000000
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
                                    <input type="text" id="totalHarga" name="totalharga" value="100000" readonly>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" for="namapenerima">
                                    Nama No Rekening
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="namapenerima" placeholder="Nama No Rekening" required>
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

@endsection