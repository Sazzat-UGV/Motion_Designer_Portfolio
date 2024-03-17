@extends('backend.layout.master')
@section('title')
    Settings
@endsection
@push('admin_style')
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'Settings'])

    <div class="container-fluid">
        <div class="col-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('admin.updateFavicon') }}" enctype="multipart/form-data" class="profile-form"
                            method="POST">
                            @csrf
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Favicon<span class="text-danger">*</span></label>
                                <input type="file" name="favicon"
                                    class="form-control @error('favicon')
                                is-invalid
                                @enderror">
                                @error('favicon')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary px-4">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('admin.updatePreloader') }}" enctype="multipart/form-data"
                            class="profile-form" method="POST">
                            @csrf
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Preloader<span class="text-danger">*</span></label>
                                <input type="file" name="preloader"
                                    class="form-control @error('preloader')
                                is-invalid
                                @enderror">
                                @error('preloader')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary px-4">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('admin.updateLogoFiles') }}" enctype="multipart/form-data"
                            class="profile-form" method="POST">
                            @csrf
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Lottie File<span class="text-danger">*</span></label>
                                <input type="file" name="lottie_file"
                                    class="form-control @error('lottie_file')
                                is-invalid
                                    @enderror">
                                @error('lottie_file')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Json File<span class="text-danger">*</span></label>
                                <input type="file" name="json_file"
                                    class="form-control @error('json_file')
                                is-invalid
                                    @enderror">
                                @error('json_file')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror

                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary px-4">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
@endpush
