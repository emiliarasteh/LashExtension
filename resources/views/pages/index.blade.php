@extends('layouts.master')
@section('css')
    <style>
        option{
            background-color: #0b0b0b;
        }

        .home-footer-image{
            background-image: url("https://assets.teenvogue.com/photos/5a84c2f6adfa794183b57486/16:9/w_2560%2Cc_limit/GettyImages-910289440.jpg") !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .custom-color{
            color: #F263AB !important;

        }
        .custom-bg-color{
            background-color: #F263AB !important;

        }

        .custom-border{
            border-top-color: #F263AB;

        }
    </style>
@endsection

@section('home_header')
    @include('partials.home_header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
            <h2 class="cursive-font custom-color">My Popular Works</h2>
        </div>
    </div>
    <div class="row">
        @foreach($makeup as $item)
        <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/assets/mytemplate/images/img_1.jpg" class="fh5co-card-item image-popup">
                <figure>
                    <div class="overlay"><i class="ti-plus"></i></div>
                    <img src="/assets/mytemplate/images/img_1.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                    <h2 class="custom-color" >{{$item->title}}</h2>
                    <p>{{$item->description}}</p>
{{--                    <p><span class="price cursive-font">$19.15</span></p>--}}
                </div>
            </a>
        </div>
        @endforeach

    </div>
@endsection



@section('home_footer')
    @include('partials.home_footer')
@endsection

