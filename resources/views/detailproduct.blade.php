@extends('layouts.app')
@section('css', '/css/detailproduct.css')
@section('content')

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
                <h2 class="text-2xl font-semibold">Product 1</h2>
                <p class="text-lg mt-2 ">Rp. 1000000</p>
                <p class="mt-4 pr-10">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, dignissimos, voluptates suscipit perferendis nam placeat vero nulla eum, quaerat eius aut! Obcaecati tempore vero blanditiis beatae dolorum soluta molestiae repellat.
                <div class="mt-6 ">
                    <p class="mb-2 text-xl">Stock : 9</p>

                    <button type="button" class="text-white mt-3 bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    @auth
                    <a href=".." class="no-underline text-white	">Beli Sekarang</a>
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