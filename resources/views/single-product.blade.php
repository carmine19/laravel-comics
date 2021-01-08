@extends('layouts.app')

@section('content')

    <section id="bg-hero"></section>

    <section id="blue-banner">
        <div class="container">
            <div class="box-image">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        </div>
    </section>

    <section id="details-cart-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-box-details-top">
                        <div class="title">
                            <h1>{{$comic['title']}}</h1>
                        </div>
                        <div class="box-price">
                            <div class="price">
                                <p>U.S. Price: <span>{{$comic['price']}}</span></p>
                            </div>
                            <div class="avaiable">
                                <p>{{$comic['price'] == true ? 'avaiable' : 'not-avaiable'}}</p>
                            </div>
                        </div>
                        <div class="description">
                            <p>{{$comic['description']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ads-box">
                        <img src="{{asset('images/ads.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="details-card-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="talent-box">
                        <div class="title">
                            <h2>Talent</h2>
                        </div>
                        <div class="info">
                            <div class="box">
                                <p class="layer-1">Art by</p>
                                <span class="detail-data">
                                    @foreach ($comic['artists'] as $artist_name)
                                        <a href="#">{{ $artist_name }}</a>{{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </span>
                            </div>
                            <div class="box">
                                <p class="layer-2">Writen by</p>
                                <span class="detail-data">
                                    @foreach ($comic['writers'] as $writter_name)
                                        <a href="#">{{ $writter_name }}</a>{{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="spec-box">
                        <div class="title">
                            <h2>Spec</h2>
                        </div>
                        <div class="info">
                            <div class="box">
                                <p class="layer-1">Series</p>
                                <span class="detail-data">
                                        <a href="#">{{$comic['series']}}</a>
                                </span>
                            </div>
                            <div class="box">
                                <p class="layer-2">U.S. Price</p>
                                <span class="detail-data">
                                    <a href="#">{{$comic['price']}}</a>
                                </span>
                            </div>
                            <div class="box">
                                <p class="layer-2">On Sale Date</p>
                                <span class="detail-data">
                                    <a href="#">{{$comic['sale_date']}}</a>
                                </span>
                            </div>
                            <div class="box">
                                <p class="layer-2">Type</p>
                                <span class="detail-data">
                                    <a href="#">{{$comic['type']}}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
