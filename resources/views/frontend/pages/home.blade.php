@extends('frontend.layout.master')
@section('title')
    Work
@endsection
@push('user_style')
@endpush
@section('contect')
    <!-- hero section start -->
    <section class="hero-section loaded">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <a href="{{ route('user.reelPage') }}" class="text-center align-items-center"><img class="img-fluid"
                            src="{{ asset('uploads/setting') }}/{{ $hiro_setting->hiro_image }}" alt="Hiro video"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- card Section Start -->
    <div class="card-section bg-wrap ">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4">
                        <div class="card-area  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2000ms"
                            style="visibility: hidden; animation-duration: 2000ms; animation-delay: 300ms; animation-name: none;">
                            <div class="card-img">
                                <a href="{{ route('user.projectDetails', ['slug' => $project->project_title_slug]) }}"><img
                                        class="img-fluid" src="{{ asset('uploads/project') }}/{{ $project->thumbnail }}"
                                        alt="card Image"></a>
                            </div>
                            <a href="{{ route('user.projectDetails', ['slug' => $project->project_title_slug]) }}">
                                <h4 class="mt-4">{{ $project->project_title }}</h4>
                            </a>
                            <p>{{ Str::limit($project->short_description, 400, '...') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card Section End -->
@endsection
@push('user_script')
@endpush
