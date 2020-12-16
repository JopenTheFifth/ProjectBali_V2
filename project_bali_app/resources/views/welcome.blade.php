@extends('layouts.app')


@section('content')




<section class="hero-image" style="background-image: url('{{asset('/images/main_hero_darkened.jpg')}}') !important; height: 200px;">

    <div class="container" style="padding-top: 15rem;">
        <div class="row">
            <div class="col-lg-6 text-white m-auto">
                <h1 class="heroTitle">Resorts in Bali</h1>
                <p class="heroSubtitle text-bold">Find your dream resort in a few clicks!</p>
            </div>
            <div class="col-lg-6">
                <datepicker-component></datepicker-component>
            </div>
        </div>
    </div>


</section>



<section>

</section>


@endsection
