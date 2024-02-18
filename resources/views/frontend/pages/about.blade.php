@extends('frontend.layout.master')
@section('title')
About
@endsection
@push('user_style')

@endpush
@section('contect')
<section class="title-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pt-lg-2">
                <img class="img-fluid about-image" src="{{ asset('uploads/about') }}/{{ $about_me->image }}" alt="about image">
            </div>
            <div class="col-lg-7">
                <h2 class="about-title">About me</h2>
                <p class="" style="text-align: justify">{{ $about_me->about_me }}</p>
            </div>
        </div>

    </div>
</section>
@endsection
@push('user_script')

@endpush
