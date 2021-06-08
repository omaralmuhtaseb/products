@extends('layouts.app')


@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="box">
        <div class="container">
            <div class="row">

                <div class="col-md-4 ">
                    <a href="{!! action('CategoryController@index') !!}">

                    <div class="box-part text-center">

                        <i class="fa fa-cube nav-icon fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Categories</h4>
                        </div>

                        <div class="text">
                            <b class="count">{{$categories_count}}</b>
                        </div>


                    </div>
                    </a>
                </div>

                <div class="col-md-4 ">

                    <a href="{!! action('UsersController@index') !!}">

                    <div class="box-part text-center">

                        <i class="fa fa-users nav-icon fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Users</h4>
                        </div>

                        <div class="text">
                            <b class="count">{{$users_count}}</b>
                        </div>



                    </div>
                    </a>
                </div>

                <div class="col-md-4 ">
                    <a href="{!! action('ProductController@index') !!}">

                    <div class="box-part text-center">

                        <i class="fa fa-product-hunt fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Products</h4>
                        </div>

                        <div class="text">
                            <b class="count ">{{$products_count}}</b>
                        </div>


                    </div>
                    </a>
                </div>


                </div>


            @include('chart')
            </div>

    </div>


@endsection
