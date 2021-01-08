@extends('layouts.app')

@section('content')

    <section id="bg-hero">

    </section>

    <section id="card">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Current series </h2>
                </div>
                @foreach($comics as $index => $value)
                <div class="col-lg-2">
                    <div class="box-card">
                        <div class="box-image">
                            <a href="{{ route('comic-details', ['id' => $index]) }}">
                                <img src="{{$value['thumb']}}" alt="">
                            </a>
                        </div>
                        <div class="box-series">
                            <p>{{$value['series']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 offset-1">
                    <div class="box-banner">
                        <div class="box-img">
                            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        <div class="box-text">
                            <h3>Digital Comics</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box-banner">
                        <div class="box-img">
                            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                        </div>
                        <div class="box-text">
                            <h3>Digital Comics</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box-banner">
                        <div class="box-img">
                            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                        </div>
                        <div class="box-text">
                            <h3>Digital Comics</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box-banner">
                        <div class="box-img">
                            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                        </div>
                        <div class="box-text">
                            <h3>Digital Comics</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box-banner">
                        <div class="box-img">
                            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        <div class="box-text">
                            <h3>Digital Comics</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
