@extends('layouts.front')

@section('content')

@include('components.navbar')
<section class="best-items">
    <div class="container">
        <div class="row text-center mb-50">
            <div class="col-lg-12">
                <img src="{{asset('storage/images/ic_best.svg')}}" height="42" alt="" class="mb-16">
                <h3 class="big-header">
                    My Wishlist
                </h3>
                <p class="paragraph">
                    Dolor space comfortable moments
                </p>
            </div>
        </div>
        <div class="row">
            @component('components.house_card')
                @slot('cover', 'storage/images/house2.png')
                @slot('title', 'Rumah Whislist')
                @slot('price', '472,642')
                @slot('location', 'Semarang')
                @slot('review', '')
            @endcomponent()
        </div>
    </div>
</section>

@endsection
