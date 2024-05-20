@extends('layouts.home')

@section('content')

@php
    $page = 'contact';
@endphp

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Contact us</h1>
       </div>
     </div>
   </div>
  </section>

  <section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-4 d-flex">
         <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
           <span class="fa fa-map-marker"></span>
         </div>
         <h3 class="mb-2">Address</h3>
         <p>Kuta Selatan, Badung, Bali, Indonesia</p>
       </div>
     </div>
   <div class="col-md-4 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-paper-plane"></span>
     </div>
     <h3 class="mb-2">Email Address</h3>
     <p><a href="mailto:info@yoursite.com">hiddengemkutaselatan@gmail.com</a></p>
   </div>
  </div>
  <div class="col-md-4 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-globe"></span>
   </div>
   <h3 class="mb-2">Website</h3>
   <p><a href="#">hiddengemkutaselatan.com</a></p>
  </div>
  </div>
  </div>
  </div>
  </section>

@endsection
