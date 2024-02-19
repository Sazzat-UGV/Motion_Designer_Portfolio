@extends('backend.layout.master')
@section('title')
    Project Details
@endsection
@push('admin_style')
    <style>
        .icon-hover:hover {
            border-color: #3b71ca !important;
            background-color: white !important;
            color: #3b71ca !important;
        }

        .icon-hover:hover i {
            color: #3b71ca !important;
        }
    </style>
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'Project Details'])
    <div class="container-fluid">
        <!-- content -->
        <div class="card">
            <section class="py-5">
                <div class="container">
                    <div class="row gx-5">
                        <aside class="col-lg-6">
                            <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                    src="{{ asset('uploads/project') }}/{{ $project->thumbnail }}" />
                            </div>
                        </aside>
                        <main class="col-lg-6">
                            <div class="ps-lg-3">
                                <h4 class="title text-dark">
                                    {{ $project->project_title }}
                                </h4>

                                <p>{{ $project->short_description }}</p>

                                <hr />
                                <a href="{{ $project->behance_link  }}" target=”blank”>Goto Behance</a>
                                <hr />
                                <a href="{{ route('admin.activeProject', ['id' => $project->id]) }}"
                                    class="btn @if ($project->is_active == '1') btn-success
                                    @else
                                    btn-danger @endif shadow-0 text-center">
                                    @if ($project->is_active == '1')
                                        Active
                                    @else
                                        Deactive
                                    @endif
                                </a>
                            </div>
                        </main>
                    </div>
                </div>
            </section>
        </div>
        <!-- content -->

        <div class="card">
            <section class="bg-white border-top py-4">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-12 mb-4">
                            <div class=" rounded-2 px-3 py-2 bg-white">
                                <!-- Pills content -->
                                <div class="" >
                                    {!!  $project->video_link !!}
                                </div>
                                <!-- Pills content -->
                                @if (isset($project->title_1))
                                <div class="pt-3">
                                    <h3>{{ $project->title_1 }}</h3>
                                    <p>{{ $project->title_1_description }}</p>
                                </div>
                                @endif
                                @if (isset($project->title_2))
                                <div class="pt-3">
                                    <h3>{{ $project->title_2 }}</h3>
                                    <p>{{ $project->title_2_description }}</p>
                                </div>
                                @endif
                                @if (isset($project->title_3))
                                <div class="pt-3">
                                    <h3>{{ $project->title_3 }}</h3>
                                    <p>{{ $project->title_3_description }}</p>
                                </div>
                                @endif
                                @if (isset($project->title_4))
                                <div class="pt-3">
                                    <h3>{{ $project->title_4 }}</h3>
                                    <p>{{ $project->title_4_description }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection
@push('admin_script')
@endpush
