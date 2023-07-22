@extends('layouts.front')

@section('content')

@include('components.navbar')
<section class="house-details pb-5">
    <div class="container">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6">
                <h1 class="jumbo-header">
                    {{$slug}}
                </h1>
                <p class="paragraph">
                    Where dreams live begin without worried ipsum.
                </p>
            </div>
            <div class="col-lg-6 header">

                <h3 class="small-header">
                    (28,309)
                </h3>
                <div class="rating">
                    <img src="{{asset('storage/images/ic_star.svg')}}" height="28" alt="">
                    <img src="{{asset('storage/images/ic_star.svg')}}" height="28" alt="">
                    <img src="{{asset('storage/images/ic_star.svg')}}" height="28" alt="">
                    <img src="{{asset('storage/images/ic_star.svg')}}" height="28" alt="">
                    <img src="{{asset('storage/images/ic_star_inactive.svg')}}" height="28" alt="">
                </div>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-lg-6 mb-30">
                <img src="{{asset('storage/images/hd1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="{{asset('storage/images/hd2.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="{{asset('storage/images/hd3.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="{{asset('storage/images/hd4.png')}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row house-informations">
            <div class="col-lg-7">
                <h3 class="small-header mb-10">
                    About Listing
                </h3>
                <p class="paragraph mb-30">
                    We are in a building of from the 1800's, in a quiet street but in the heart of historic Turin.
                    to 10 min. the biggest square in Europe "Piazza Vittorio" where ther's the night life.
                    Convenient to all services. In the district you can find every day a local market with fresh
                    produce, but there are also different supermarket.
                </p>
                <h3 class="small-header mb-10">
                    Features
                </h3>
                <div class="row features">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{asset('storage/images/ic_wifi.svg')}}" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Wifi 180GBs
                                    </h3>
                                    <p class="paragraph">
                                        24 hours
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('storage/images/ic_card.svg')}}" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Access Card
                                    </h3>
                                    <p class="paragraph">
                                        3 cards
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('storage/images/ic_bell.svg')}}" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Receiptionist
                                    </h3>
                                    <p class="paragraph">
                                        24 hours
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('storage/images/ic_park.svg')}}" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        City Park
                                    </h3>
                                    <p class="paragraph">
                                        18 miles
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="booking">
                    <h3 class="small-header mb-16">
                        Start Renting
                    </h3>
                    <form>
                        <div class="mb-3">
                            <input placeholder="Choose Date" type="date" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <input placeholder="How many month?" type="number" class="form-control"
                                id="exampleInputPassword1">
                        </div>

                        <h3 class="small-header mb-16">
                            Payment
                        </h3>
                        <div class="item d-flex justify-content-between">
                            <p class="title paragraph2">
                                Renting Price
                            </p>
                            <p class="value medium-header">
                                $289,309
                            </p>
                        </div>
                        <div class="item d-flex justify-content-between">
                            <p class="title paragraph2">
                                Tax (10%)
                            </p>
                            <p class="value medium-header">
                                $5,100
                            </p>
                        </div>
                        <div class="item d-flex justify-content-between">
                            <p class="title paragraph2">
                                Insurance
                            </p>
                            <p class="value medium-header">
                                $44,890
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Continue to Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
