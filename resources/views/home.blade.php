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
                @foreach($comics as $value)
                <div class="col-lg-2">
                    <div class="box-card">
                        <div class="box-image">
                            <a href="#">
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
@endsection
