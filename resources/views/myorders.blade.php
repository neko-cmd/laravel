@extends('layouts.default')

@section('title', 'My Profile')

@section('content')

<link rel="stylesheet" href="css/myprofile.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/shop.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/breadcrumb.css">
<link rel="stylesheet" href="css/alert.css">
    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>My Profile</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section container">
        <div class="sidebar">

            <ul>
              <li class="active"><a href="{{ route('Users.edit') }}"><h3>My Profile</h3></a></li>
              <li><a href="{{ route('orders.index') }}"><h3>My Orders</h3></a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">My Orders</h1>
            </div>



        </div>
    </div>

    
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
