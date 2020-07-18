@extends('layouts.default')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')

<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/breadcrumb.css">
<link rel="stylesheet" href="css/search.css">
   @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Cart</span>
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
    
    <div class="cart-section container">
        <div>
            <h2>3 items in Shopping Cart</h2>

            <div class="cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="img/AppleWatchS5-NoirBand.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="img/AppleWatchS5-NoirBand.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="img/AppleWatchS5-NoirBand.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

            </div> <!-- end cart-table -->

            <a href="#" class="have-code">Have a Code?</a>

            <div class="have-code-container">
                <form action="#">
                    <input type="text">
                    <button type="submit" class="button button-plain">Apply</button>
                </form>
            </div> <!-- end have-code-container -->

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        $7499.97 <br>
                        $975.00 <br>
                        <span class="cart-totals-total">$8474.97</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('shop.index')}}" class="button">Continue Shopping</a>
                <a href="{{ route('checkout.index')}}" class="button-primary">Proceed to Checkout</a>
            </div>

            <h2>2 items Saved For Later</h2>

            <div class="saved-for-later cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="img/AppleWatchS5-NoirBand.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="img/AppleWatchS5-NoirBand.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

            </div> <!-- end saved-for-later -->

        </div>

    </div> <!-- end cart-section -->

    @include('layouts.partials.might-like')
    <style>
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
        }
        .might-like-section .might-like-product img {
            width: 30%;
        }
        .might-like-section .might-like-product-price {
            font-family: 'Raleway', sans-serif;
            color: #ad1f00;
            font-weight: bold;
        }
      
    </style>

@endsection
