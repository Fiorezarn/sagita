@extends('layouts.app')
@section('title', 'Sagita')
@section('css', '/css/home.css')
@section('content')
<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="fas fa-arrow-circle-up fa-3x" style="color: #8d0202;"></i></i></a>

<section class="bg-center bg-no-repeat  bg-gray-700 bg-blend-multiply jumbotron" id="jumbotron">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Kami memiliki barang barang berkualitas</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Disini anda bisa menemukan barang pakaian, makanan dan alat elektronik yang berkualitas dan harga terjangkau.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#header-content" class="inline-flex justify-center no-underline hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-red-900 focus:ring-4 focus:ring-gray-400">
                Selengkapnya
            </a>  
        </div>
    </div>
</section>

<section id="header-content">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-full rounded-xl	" src="{{ asset('img/hero1.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="display-5 mb-4 mt-10">Sagita Store</h5>
                    <p class="mb-4 text-justify">
                        Sagita adalah website e-commerce yang menyediakan pakaian, alat-alat, dan makanan berkualitas tinggi dengan gaya yang modis dan harga kompetitif. Sagita memanjakan pelanggan dengan berbagai pilihan produk yang dipilih dengan hati-hati dari produsen terpercaya. Pengalaman belanja yang menyenangkan dan pelayanan pelanggan yang responsif menjadi fokus utama Sagita dalam memberikan kepuasan kepada setiap pelanggan.
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Barang Berkualitas</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="#product-content">Temukan Produk Anda</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="product-content">
    <div class="container-xxl py-5 bg-red-900">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-white text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3 ">Our Products</h1>
                        <p>Temukan barang berkualitas anda disini. Anda juga dapat memilih berdasarkan kategori yang telah disediakan seperti pakaian, makanan dan alat-alat</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a id="pakaianBtn" class="btn btn-outline-primary border-2 active" data-bs-toggle="pill">Pakaian</a>
                        </li>
                        <li class="nav-item me-2">
                            <a id="makananBtn" class="btn btn-outline-primary border-2" data-bs-toggle="pill">Makanan</a>
                        </li>
                        <li class="nav-item me-0">
                            <a id="alatBtn"  class="btn btn-outline-primary border-2" data-bs-toggle="pill">Alat-Alat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mx-44 mt-10 ">
        <input type="text" id="searchInput" class="form-control mb-4 h-11 search" placeholder="Search By Name Product">
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mx-24" id="productGrid">
        @foreach ($admin as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 item" data-category="{{ $product->kategori }}">
            <img class="rounded-t-lg" src="{{ url('foto_produk/' . $product->gambar) }}" alt="" />

            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white namabarang">{{ $product->namabarang }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->deskripsi }}</p>
                <a href="/detailproduct/{{ $product->id }}" class="inline-flex no-underline items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Detail Product
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>


<section id="contact-us">
      <div class="container-xxl py-6 mt-44">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact Us</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-red-900	 text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+62 852-2091-4299</p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fa-brands fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href="https://api.whatsapp.com/send?phone=6285220914299&text=Hallo%2C%20saya%20ingin%20mengetahui%20layanan%20anda%2C%20bisa%20tolong%20dijelaskan%20lebih%20detail%3F" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4 text-justify">
                    <span class="text-red-700">Sagita</span> menghargai hubungan dengan pelanggan kami dan selalu siap membantu. Jika Anda memiliki pertanyaan, masukan, atau butuh bantuan, jangan ragu untuk menghubungi kami melalui layanan Contact Us kami. Tim kami yang ramah dan responsif siap menjawab setiap permintaan Anda dengan segera. Kami berkomitmen untuk memberikan pengalaman pelanggan yang luar biasa dan memastikan kepuasan Anda adalah prioritas utama kami.
                    </p>
                    
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message_sent') }}
                    </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="post" role="form" enctype="multipart/form-data" id="contact-form">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl px-0 wow fadeIn flex justify-center" data-wow-delay="0.1s" style="margin-bottom: -6px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.8205400216066!2d106.71591131477011!3d-6.417099995357075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjUnMDEuNiJTIDEwNsKwNDMnMDUuMiJF!5e0!3m2!1sid!2sid!4v1688997359355!5m2!1sid!2sid" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<script>
    const searchInput = document.getElementById('searchInput');
    const productGrid = document.getElementById('productGrid');
    const products = Array.from(productGrid.getElementsByClassName('item'));

    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();

        products.forEach((product) => {
            const productName = product.querySelector('.namabarang').textContent.toLowerCase();

            if (productName.includes(searchTerm)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });

    // Fungsi untuk memfilter produk berdasarkan kategori yang dipilih
    function filterProducts(category) {
        products.forEach((product) => {
            const productCategory = product.getAttribute('data-category');

            if (productCategory === category || category === 'all') {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    // Tambahkan event listener pada setiap tombol kategori
    const pakaianBtn = document.getElementById('pakaianBtn');
    pakaianBtn.addEventListener('click', () => {
        filterProducts('pakaian');
    });

    const makananBtn = document.getElementById('makananBtn');
    makananBtn.addEventListener('click', () => {
        filterProducts('makanan');
    });

    const alatBtn = document.getElementById('alatBtn');
    alatBtn.addEventListener('click', () => {
        filterProducts('alat-alat');
    });

    // Event listener untuk input pencarian
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const selectedCategory = document.querySelector('.nav-pills .active').getAttribute('data-category');

        products.forEach((product) => {
            const productName = product.querySelector('.namabarang').textContent.toLowerCase();
            const productCategory = product.getAttribute('data-category');

            if ((productName.includes(searchTerm) || searchTerm === '') && (productCategory === selectedCategory || selectedCategory === 'all')) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
</script>

@endsection