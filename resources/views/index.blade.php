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
                    <h5 class="display-5 mb-4">Sagita Store</h5>
                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam unde, animi illum et quam dolor molestiae asperiores possimus nisi, temporibus modi repellendus praesentium placeat corporis accusamus ut? Provident, et est.</p>
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
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi sit libero corporis accusamus ut,</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Barang 1</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Barang 2</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Barang 3</a>
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
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 item">
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
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias cupiditate iusto iure repellendus, assumenda aut architecto voluptatibus fugiat eligendi quibusdam! Voluptatum sapiente aliquid qui magnam eum? Laboriosam quo perspiciatis impedit..</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.481372455454!2d106.615909!3d-6.231969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc1acf84837d%3A0x6642a0008730b471!2sUniversitas%20Gunadarma%20Kampus%20K!5e0!3m2!1sid!2sid!4v1688889566599!5m2!1sid!2sid" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</script>

@endsection