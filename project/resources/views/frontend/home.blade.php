@extends('layouts.master')

@section('content')
    <!-- Start Hero Area -->
    @include('layouts.components.home.hero-area')
    <!-- End Hero Area -->

    <!-- Start Featured Categories Area -->
   @include('layouts.components.home.categories')
    <!-- End Features Area -->

    <!-- Start Trending Product Area -->
    @include('layouts.components.home.products')
    <!-- End Trending Product Area -->

    <!-- Start Banner Area -->
    @include('layouts.components.home.banner')
    <!-- End Banner Area -->

    <!-- Start Special Offer -->
    @include('layouts.components.home.special-offer')
    <!-- End Special Offer -->

    <!-- Start Home Product List -->
    @include('layouts.components.home.product-list')
    <!-- End Home Product List -->

    <!-- Start Brands Area -->
    @include('layouts.components.home.brands')
    <!-- End Brands Area -->

    <!-- Start Blog Section Area -->
    @include('layouts.components.home.blog')
    <!-- End Blog Section Area -->

    <!-- Start Shipping Info -->
    @include('layouts.components.home.shipping-info')
    <!-- End Shipping Info -->
@endsection
