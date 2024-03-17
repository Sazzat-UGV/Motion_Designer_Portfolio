@extends('frontend.layout.master')
@section('title')
    Reel
@endsection
@push('user_style')
@endpush
@section('contect')
    {{-- <section class="hero-section loaded">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                {!! $setting->hiro_video !!}
            </div>
        </div>
    </div>
</section> --}}

    <div class="main-content">
        <section class="work-content-section loaded">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>{{ $hiro_setting->hero_main_title }}</h4>
                        <!-- <h2>The all in one accounting tool</h2> -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        {!! $setting->hiro_video !!}
                    </div>

                    <div class="col-lg-12 mt-5">
                        <h4>{{ $hiro_setting->hero_title_1 }}</h4>
                        <p class="text-justify">{!! $hiro_setting->hero_title_1_description !!}</p>
                    </div>

                    @if (isset($hiro_setting->hero_title_2))
                        <div class="col-lg-12 mt-5">
                            <h4>{{ $hiro_setting->hero_title_2 }}</h4>
                            <p class="text-justify">{!! $hiro_setting->hero_title_2_description !!}</p>
                        </div>
                    @endif
                    @if (isset($hiro_setting->hero_title_3))
                        <div class="col-lg-12 mt-5">
                            <h4>{{ $hiro_setting->hero_title_3 }}</h4>
                            <p class="text-justify">{!! $hiro_setting->hero_title_3_description !!}</p>
                        </div>
                    @endif
                    @if (isset($hiro_setting->hero_title_4))
                        <div class="col-lg-12 mt-5">
                            <h4>{{ $hiro_setting->hero_title_4 }}</h4>
                            <p class="text-justify">{!! $hiro_setting->hero_title_4_description !!}</p>
                        </div>
                    @endif

                </div>

            </div>
        </section>
    </div>
@endsection
@push('user_script')
@endpush
