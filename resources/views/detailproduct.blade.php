@extends('layouts.app')
@section('title', 'Detail Product')
@section('css', '/css/detailproduct.css')
@section('content')

<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="fas fa-arrow-circle-up fa-3x" style="color: #8d0202;"></i></i></a>

    <div class="container-fluid page-header mb-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h3 class="display-5 mb-3 animated slideInDown">Detail Product</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Detail Product</li>
                </ol>
            </nav>
        </div>
    </div>

<section class="detail-produk ">
    <div class="container">
        <a href="{{ url('/') }}"><i class="fa-solid fa-circle-arrow-left fa-3x"></i></a>
    </div>
    <div class="container mt-10">
        <div class="row" >
            <div class="col-md-6 img-produk">
                <img src="{{ asset('img/hero1.png') }}" alt="..." class=" h-auto rounded-t-lg">       
            </div>
            <div class="col-md-6 text-justify">
                <h2 class="text-2xl font-semibold">{{ $admin->namabarang }}</h2>
                <p class="text-lg mt-2 ">Rp. {{ number_format($admin->harga, 0, ',', '.') }}</p>
                <p class="mt-4 pr-10">
                    Deskripsi : {{ $admin->deskripsi }} </p>
                <div class="mt-6 ">
                    <p class="mb-2 text-xl">Stok : {{ $admin->stock }}</p>

                    <button type="button" class="text-white mt-3 bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    @auth
                    <a href="/pembayaran/{{$admin ->id}}" class="no-underline text-white	">Beli Sekarang</a>
                    @else
                    <a href="/login" class="no-underline text-white	">Beli Sekarang</a>    
                    @endauth
                    
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection