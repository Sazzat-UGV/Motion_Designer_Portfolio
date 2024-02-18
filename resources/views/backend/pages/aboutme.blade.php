@extends('backend.layout.master')
@section('title')
    About Me
@endsection
@push('admin_style')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'About Me'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="clearfix">
                    <div class="card card-bx profile-card author-profile m-b30">
                        <div class="card-body">
                            <div class="p-5">
                                <div class="author-profile">
                                    <div class="author-media">
                                        <img src="{{ asset('uploads/about') }}/{{ $about_me->image }}" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="title">{{ $about_me->name }}</h6>
                                        <span>{{ $about_me->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card profile-card card-bx m-b30">
                    <div class="card-header">
                        <h6 class="title">Profile Setup</h6>
                    </div>
                    <form class="profile-form" action="{{ route('admin.updateAboutMe', ['id' => $about_me->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('name')
                                        is-invalid
                                    @enderror"
                                        value="{{ old('name', $about_me->name) }}" name="name">
                                    @error('name')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email', $about_me->email) }}"
                                        class="form-control @error('email')
                                    is-invalid
                                    @enderror">
                                    @error('email')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Phone<span class="text-danger">*</span></label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('phone', $about_me->phone) }}">
                                    @error('phone')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Location<span class="text-danger">*</span></label>
                                    <input type="text" name="location"
                                        class="form-control @error('location')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('location', $about_me->location) }}">
                                    @error('location')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-4 m-b30">
                                    <label class="form-label">Instagram Link<span class="text-danger">*</span></label>
                                    <input type="text" name="instagram"
                                        class="form-control @error('instagram')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('instagram', $about_me->instagram) }}">
                                    @error('instagram')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-4 m-b30">
                                    <label class="form-label">Linkedin Link<span class="text-danger">*</span></label>
                                    <input type="text" name="linkedin"
                                        class="form-control @error('linkedin')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('linkedin', $about_me->linkedin) }}">
                                    @error('linkedin')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-4 m-b30">
                                    <label class="form-label">Behance Link<span class="text-danger">*</span></label>
                                    <input type="text" name="behance"
                                        class="form-control @error('behance')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('behance', $about_me->behance) }}">
                                    @error('behance')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 m-b30">
                                    <label class="form-label">About Me
                                        <span class="text-danger">*</span></label>
                                    <textarea name="about_me" id="#" cols="30" rows="10"
                                        class="form-control @error('about_me')
                                is-invalid
                                @enderror">{{ $about_me->about_me }}</textarea>
                                    @error('about_me')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 m-b30">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="image"
                                        class="dropify @error('image')
                                    is-invalid
                                    @enderror"
                                        data-default-file={{ asset('uploads/about') }}/{{ $about_me->image }}>
                                    @error('image')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary px-4">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

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
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
