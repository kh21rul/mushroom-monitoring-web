@extends('layouts.main')

@section('hero')
    {{-- pembuka div ada pada main --}}
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">MonJaTir - (Monitoring Jamur Tiram)
                    </h1>
                    <p class="text-white pb-3 animated zoomIn">Mari monitoring jamur tirammu bersama MonJaTir agar hasil
                        panenmu lebih bagus dan baik</p>
                    <a href="{{ route('dashboard') }}"
                        class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Mulai
                        Monitoring</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('landpages/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
