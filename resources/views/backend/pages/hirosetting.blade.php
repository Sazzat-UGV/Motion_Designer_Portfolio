@extends('backend.layout.master')
@section('title')
    Hiro Settings
@endsection
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'Hiro Settings'])
    <div class="container-fluid">
        <div class="col-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-body">
                    <div class="row">

                        <form action="{{ route('admin.updateHiroVideo', ['id' => 1]) }}" class="profile-form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Image
                                    <span class="text-danger">*</span></label>
                                <input type="file" name="hiro_image"
                                    data-default-file="{{ asset('uploads/setting/hiro_image.jpg') }}"
                                    class="dropify
                                    @error('hiro_image')
                                is-invalid
                                @enderror">
                                @error('hiro_image')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

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

                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Main Title<span class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control @error('hero_main_title')
                                    is-invalid
                                @enderror"
                                    value="{{ old('hero_main_title', $hiro_setting->hero_main_title) }}"
                                    name="hero_main_title">
                                @error('hero_main_title')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 1<span class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control @error('hero_title_1')
                                    is-invalid
                                @enderror"
                                    value="{{ old('hero_title_1', $hiro_setting->hero_title_1) }}" name="hero_title_1">
                                @error('hero_title_1')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 1 Description<span class="text-danger">*</span></label>
                                <textarea name="hero_title_1_description" id="editor"
                                    class="form-control @error('hero_title_1_description')
                                is-invalid
                                @enderror"
                                    cols="30" rows="5">{{ old('hero_title_1_description', $hiro_setting->hero_title_1_description) }}</textarea>
                                @error('hero_title_1_description')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 2</label>
                                <input type="text"
                                    class="form-control @error('hero_title_2')
                                    is-invalid
                                @enderror"
                                    value="{{ old('hero_title_2', $hiro_setting->hero_title_2) }}" name="hero_title_2">
                                @error('hero_title_2')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 2 Description</label>
                                <textarea name="hero_title_2_description" id="editor1"
                                    class="form-control @error('hero_title_2_description')
                                is-invalid
                                @enderror"
                                    cols="30" rows="5">{{ old('hero_title_2_description', $hiro_setting->hero_title_2_description) }}</textarea>
                                @error('hero_title_2_description')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 3</label>
                                <input type="text"
                                    class="form-control @error('hero_title_3')
                                    is-invalid
                                @enderror"
                                    value="{{ old('hero_title_3', $hiro_setting->hero_title_3) }}" name="hero_title_3">
                                @error('hero_title_3')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 3 Description</label>
                                <textarea name="hero_title_3_description" id="editor2"
                                    class="form-control @error('hero_title_3_description')
                                is-invalid
                                @enderror"
                                    cols="30" rows="5">{{ old('hero_title_3_description', $hiro_setting->hero_title_3_description) }}</textarea>
                                @error('hero_title_3_description')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-sm-12 m-b30">
                                <label class="form-label"> Hiro Title 4</label>
                                <input type="text"
                                    class="form-control @error('hero_title_4')
                                    is-invalid
                                @enderror"
                                    value="{{ old('hero_title_4', $hiro_setting->hero_title_4) }}" name="hero_title_4">
                                @error('hero_title_4')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 m-b30">
                                <label class="form-label">Hiro Title 4 Description</label>
                                <textarea name="hero_title_4_description" id="editor3"
                                    class="form-control @error('hero_title_4_description')
                                is-invalid
                                @enderror"
                                    cols="30" rows="5">{{ old('hero_title_4_description', $hiro_setting->hero_title_4_description) }}</textarea>
                                @error('hero_title_4_description')
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
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
