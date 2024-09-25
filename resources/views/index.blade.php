@extends('master')
@section('content')
    <section class="hero-section text-white text-left home">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display-5" style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">Bridging <span class="fw-bold">cultures</span><br>Empowering <span class="fw-bold">women</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px;">We're more than just a translation company. Founded on a commitment to gender equality and social impact, Tarjamat provides top-tier language services while creating a platform for talented female translators.</p>
                    <a href="{{route('website.services')}}" class="btn">Browse services</a>
                    <a href="{{route('website.contact')}}" class="btn btn-white">Submit a request</a>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>
@endsection
