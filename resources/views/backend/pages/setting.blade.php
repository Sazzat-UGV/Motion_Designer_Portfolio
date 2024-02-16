@extends('backend.layout.master')
@section('title')
    Settings
@endsection
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'Settings'])
    <div class="container-fluid">
        <div class="col-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-body">
                    <div class="row">

                        <form action="{{ route('admin.updateHiroVideo', ['id' => 1]) }}" class="profile-form"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Video
                                    <span class="text-danger">*</span></label>
                                <textarea name="hiro_video" id="" cols="30" rows="5"
                                    class="form-control @error('hiro_video')
                    is-invalid
                    @enderror">{{ $setting->hiro_video }}</textarea>
                                @error('hiro_video')
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

                        <form action="{{ route('admin.updateFavicon', ['id' => 1]) }}" enctype="multipart/form-data"
                            class="profile-form" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Favicon
                                    <span class="text-danger">*</span></label>
                                <input type="file" name="favicon"
                                    class="dropify @error('favicon')
                                is-invalid
                                @enderror"
                                    data-default-file="{{ asset('uploads/setting/favicon') }}/{{ $setting->favicon }}">
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
@endsection
@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
