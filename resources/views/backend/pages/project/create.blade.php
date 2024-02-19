@extends('backend.layout.master')
@section('title')
    Add New Project
@endsection
@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
    integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb',['main_page'=>'Add New Project'])
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card profile-card card-bx m-b30">
                        <form class="profile-form" action="{{ route('project.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Project Title<span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('project_title')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('project_title') }}" name="project_title">
                                        @error('project_title')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Short Description<span class="text-danger">*</span></label>
                                        <textarea name="short_description" class="form-control @error('short_description')
                                        is-invalid
                                        @enderror" cols="30" rows="5">{{ old('short_description') }}</textarea>
                                        @error('short_description')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 1<span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('title_1')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('title_1') }}" name="title_1">
                                        @error('title_1')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 1 Description<span class="text-danger">*</span></label>
                                        <textarea name="title_1_description" class="form-control @error('title_1_description')
                                        is-invalid
                                        @enderror" cols="30" rows="5">{{ old('title_1_description') }}</textarea>
                                        @error('title_1_description')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 2</label>
                                        <input type="text"
                                            class="form-control @error('title_2')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('title_2') }}" name="title_2">
                                        @error('title_2')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 2 Description</label>
                                        <textarea name="title_2_description" class="form-control @error('title_2_description')
                                        is-invalid
                                        @enderror" cols="30" rows="5">{{ old('title_2_description') }}</textarea>
                                        @error('title_2_description')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 3</label>
                                        <input type="text"
                                            class="form-control @error('title_3')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('title_3') }}" name="title_3">
                                        @error('title_3')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 3 Description</label>
                                        <textarea name="title_3_description" class="form-control @error('title_3_description')
                                        is-invalid
                                        @enderror" cols="30" rows="5">{{ old('title_3_description') }}</textarea>
                                        @error('title_3_description')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 4</label>
                                        <input type="text"
                                            class="form-control @error('title_4')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('title_4') }}" name="title_4">
                                        @error('title_4')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Title 4 Description</label>
                                        <textarea name="title_4_description" class="form-control @error('title_4_description')
                                        is-invalid
                                        @enderror" cols="30" rows="5">{{ old('title_4_description') }}</textarea>
                                        @error('title_4_description')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    </div>

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Thumbnail<span class="text-danger">*</span></label>
                                        <input type="file" name="thumbnail"
                                            class="dropify @error('thumbnail')
                                        is-invalid
                                        @enderror">
                                        @error('thumbnail')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Video Link<span class="text-danger">*</span></label>
                                        <textarea name="video_link" id="#" cols="30" rows="5"
                                            class="form-control @error('video_link')
                                    is-invalid
                                    @enderror">{{ old('video_link') }}</textarea>
                                        @error('video_link')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Behance Link</label>
                                        <input type="text"
                                            class="form-control @error('behance_link')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('behance_link') }}" name="behance_link">
                                        @error('behance_link')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary px-4">ADD</button>
                            </div>
                        </form>
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
