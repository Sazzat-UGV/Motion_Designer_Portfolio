@extends('frontend.layout.master')
@section('title')
Detail
@endsection
@push('user_style')

@endpush
@section('contect')
<div class="main-content">
    <section class="work-content-section loaded">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>{{ $project->project_title }}</h4>
                    <!-- <h2>The all in one accounting tool</h2> -->
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    {!! $project->video_link !!}
                </div>

                <div class="col-lg-12 mt-5">
                    <h4>{{ $project->title_1 }}</h4>
                    <p class="text-justify">{{ $project->title_1_description }}</p>
                </div>

                @if (isset($project->title_2))
                <div class="col-lg-12 mt-5">
                    <h4>{{ $project->title_2 }}</h4>
                    <p class="text-justify">{{ $project->title_2_description }}</p>
                </div>
                @endif
                @if (isset($project->title_3))
                <div class="col-lg-12 mt-5">
                    <h4>{{ $project->title_3 }}</h4>
                    <p class="text-justify">{{ $project->title_3_description }}</p>
                </div>
                @endif
                @if (isset($project->title_4))
                <div class="col-lg-12 mt-5">
                    <h4>{{ $project->title_4 }}</h4>
                    <p class="text-justify">{{ $project->title_4_description }}</p>
                </div>
                @endif

            </div>

            <div class="row">
                <div class="col-lg-12 mt-5 pt-5">
                    <h4 class="btn-title">Check out the full case study on <a class="lmpage-btn" href="{{ $project->behance_link }}" target="blank"> Behance</a></h4>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('user_script')

@endpush
