@extends('layouts.default')

@section('title', 'Product')

@section('extra-css')

@endsection

@section('content')

<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/breadcrumb.css">
    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{$product->title }}</span>
    @endcomponent
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

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('/products/'.$product->slug.'.jpg')}}" alt="product">
        </div>
        <div class="product-section-information">
              <h1 class="product-section-title">{{ $product->title }}</h1>
              <div class="product-section-subtitle">{{ $product->subtitle }}</div>
              <div class="product-section-price">{{ $product->presentPrice() }}</div>

              <p>
                  {{ $product->description }}
              </p>
              <form action="" method="GET">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id}}">
                    <input type="hidden" name="title" value="{{ $product->title}}">
                    <input type="hidden" name="price" value="{{ $product->price}}">
                    <button type="submit" class="button button-plain">Add to Cart</button>

              </form> 
            
            
        
        </div>
    </div> <!-- end product-section -->
    @include('layouts.partials.might-like')
  

  <style>
.product-section {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 120px;
    padding: 100px 0 120px;
  }
  .product-section .selected {
    border: 1px solid #979797;
  }
  
  .product-section-images {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-gap: 20px;
    margin-top: 20px;
  }
  
  .product-section-thumbnail {
    display: flex;
    align-items: center;
    border: 1px solid lightgray;
    min-height: 66px;
    cursor: pointer;
  }
  .product-section-thumbnail:hover {
    border: 1px solid #979797;
  }
  
  .product-section-image {
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #979797;
    padding: 30px;
    text-align: center;
    height: 400px;
  }
  .product-section-image img {
    
    transition: opacity 0.1s ease-in-out;
    max-height: 100%;
  }
  .product-section-image img.active {
    opacity: 1;
  }
  
  .product-section-information p {
    margin-bottom: 16px;
  }
  
  .product-section-title {
    margin-bottom: 0;
  }
  
  .product-section-subtitle {
    font-size: 20px;
    font-weight: bold;
    color: rgb(146, 134, 134);
  }
  
  .product-section-price {
    font-family: 'Raleway', sans-serif;
    font-size: 30px;
    color: #ad1f00;
    margin-bottom: 16px;
    
    
  }
  
  .breadcrumbs {
    background: rgb(212, 209, 209);
    border-bottom: 1px solid;
    padding: 24px 0;
  }
  .breadcrumbs .breadcrumb-separator {
    font-size: 14px;
    color: grey;
  }
  .breadcrumbs .breadcrumbs-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .button {
    background: teal;
    color: white;
    padding: 12px 40px;
  }
  .button:hover {
    background: #016161;
    color: white;
  }
  .might-like-section {
    padding: 40px 0 70px;
    background: lightgray;
  }
  .might-like-section h2 {
    padding-bottom: 30px;
  }
  .might-like-section .might-like-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 30px;
  }
  .might-like-section .might-like-product {
    border: 1px solid #979797;
    background: white;
    padding: 30px 0 20px;
    text-align: center;
    text-decoration: none;
    color:black;
  }
  .might-like-section .might-like-product a{
    text-decoration: none;
  }
  .might-like-section .might-like-product:hover a{
    text-decoration: none;
    color:black;
  }
  .might-like-section .might-like-product img {
    width: 30%;
  }
  .might-like-section .might-like-product-price {
    font-family: 'Raleway', sans-serif;
    color: #ad1f00;
    font-weight: bold;
  }
  form button[type=submit] {
    border-style: none;
    cursor: pointer;
    font-size: 18px;
    line-height: 1.6;
  }
  .search-form {
    position: relative;
  }
  
  .search-icon {
    color: gray;
    position: absolute;
    top: 12px;
    left: 12px;
  }
  
  .search-box {
    padding: 10px 12px 10px 34px;
    width: 400px;
    max-width: 100%;
    font-size: 14px;
  }
  
  
  
  /*# sourceMappingURL=cart.css.map */
  
  </style>

@endsection
