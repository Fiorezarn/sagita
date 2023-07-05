@extends('layouts.app')
@section('css', '/css/style.css')
@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left content -->
                <div class="col-xs-12 col-sm-6 mobile-flex">
                    <div class="mb-2">
                        <p class="subject">Grand Sale Offer</p>
                    </div>
                    <h1 class="title mb-5 mb-sm-6">Summer Time: Grab this deal right now, tomorrow might be gone!</h1>
                    <a class="btn-offer" href="https://codepen.io/gabrielski" data-slug="See our offer" aria-label="See our offer" role="btn-offer" tabindex="0">See Offer</a>

                    <div class="mt-3">
                        <div class="money-back-container">
                            <div>
                                <span class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z" />
                                    </svg></span><span class="vertical-middle money-back c-bw-12">Covered by the 30-day money-back guarantee policy. <a href='https://codepen.io/gabrielski' class='more-info-link'>More info</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left content -->

                <!-- Right image -->
                <div class="col-xs-12 col-sm-6 pt-7 pt-sm-0">
                    <div class="center-block img-responsive">
                        <div class="image-zone" style="padding-top:100%"><img class="right-image" src="https://i.ibb.co/vzRN098/gold.png" alt="Jumbotron Offer Deal Example" width="555" height="555"></div>
                    </div>
                </div>
                <!-- End right image -->

            </div>
        </div>
    </div>
</section>
<!-- End summer jumbotron -->
    
@endsection