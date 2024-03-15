@extends('pages.master')

@section('home')
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @include('pages.navbar')
        <!-- Carousel Start -->
        @include('pages.carousel')
        <!-- Carousel End -->

        <!-- Search Start -->
       {{-- @include('pages.search') --}}
        <!-- Search End -->


        <!-- Category Start -->
        @include('pages.category')
        <!-- Category End -->


        <!-- About Start -->
        @include('pages.abouthome')
        <!-- About End -->


        <!-- Jobs Start -->
        @include('pages.jobhome')
        <!-- Jobs End -->


        <!-- Category Start -->
        @include('pages.company')
        <!-- Category End -->


        <!-- Testimonial Start -->
        @include('pages.testimonial')
        <!-- Testimonial End -->
@endsection    

 