@extends('layouts.app')
@section('title', 'Checkout')
@section('css', '/css/checkout.css')
@section('content')

<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="fas fa-arrow-circle-up fa-3x" style="color: #8d0202;"></i></i></a>

    <div class="container-fluid page-header mb-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h3 class="display-5 mb-3 animated slideInDown">Checkout</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>

<section class="checkout">
    <div class="relative overflow-x-auto tabel-checkout">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No HP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Rekening
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Item
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Status Pembayaran
                     </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $history)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $history->nama_user }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $history->nama_barang }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->nohp }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->nama_rekening }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->totalitem }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->totalharga }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->alamat }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $history->status_pembayaran }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</section>


@endsection