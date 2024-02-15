@extends('backend.layout.master')
@section('title')
    My Profile
@endsection
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'My Profile'])
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-center">
                                                    <div class="profile-photo ">
                                                        <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}"
                                                            class="img-fluid rounded-circle w-50" alt="">
                                                    </div>
                                                    <h5 class="mt-3">{{ Auth::user()->name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1"
                                                data-bs-toggle="modal" data-bs-target="#sendMessageModal">Change Image</a>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="sendMessageModal">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Change Image</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="comment-form" action="{{ route('admin.updateImage') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <input type="file" name="image"
                                                                    class="dropify form-control @error('image')
                                                                   is-invalid
                                                               @enderror"
                                                                    data-default-file="{{ asset('uploads/user') }}/{{ Auth::user()->image }}"
                                                                    data-height="220">
                                                                @error('image')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-lg-12 mt-3">
                                                                <div class="mb-3 mb-0">
                                                                    <input type="submit" value="Update"
                                                                        class="submit btn btn-primary">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-8">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a href="#about-me" data-bs-toggle="tab"
                                            class="nav-link" aria-selected="false" tabindex="-1" role="tab">About
                                            Me</a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#profile-settings"
                                            data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                                            role="tab">Setting</a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#changepassword" data-bs-toggle="tab"
                                            class="nav-link" aria-selected="false" tabindex="-1" role="tab">Change
                                            Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show" role="tabpanel">
                                        <div class="profile-personal-info mt-4">
                                            <h4 class="text-primary mb-4">Personal Information</h4>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->name }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Phone <span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->phone }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Address <span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->address }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form action="{{ route('updateProfile', ['id' => Auth::user()->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter your name"
                                                                name="name"
                                                                value="{{ old('name', Auth::user()->name) }}"
                                                                class="form-control @error('name')
                                                            is-invalid
                                                                @enderror">
                                                            @error('name')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" placeholder="Enter your email"
                                                                name="email"
                                                                value="{{ old('email', Auth::user()->email) }}"
                                                                class="form-control @error('email')
                                                            is-invalid
                                                                @enderror">
                                                            @error('email')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-5">
                                                            <label class="form-label">Phone<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter your phone"
                                                                name="phone"
                                                                value="{{ old('phone', Auth::user()->phone) }}"
                                                                class="form-control @error('phone')
                                                            is-invalid
                                                                @enderror">
                                                            @error('phone')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-7">
                                                            <label class="form-label">Address<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter your address"
                                                                name="address"
                                                                value="{{ old('address', Auth::user()->address) }}"
                                                                class="form-control @error('address')
                                                            is-invalid
                                                                @enderror">
                                                            @error('address')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="changepassword" class="tab-pane fade" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Change Password</h4>
                                                <form action="{{ route('admin.updatePassword') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Current Password<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter Current Password"
                                                                name="current_password"
                                                                value="{{ old('current_password') }}"
                                                                class="form-control @error('current_password')
                                                            is-invalid
                                                                @enderror">
                                                            @error('current_password')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">New Password<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter New Password"
                                                                name="new_password" value="{{ old('new_password') }}"
                                                                class="form-control @error('new_password')
                                                            is-invalid
                                                                @enderror">
                                                            @error('new_password')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Retype New Password<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" placeholder="Enter New Password Again"
                                                                name="retype_new_password"
                                                                value="{{ old('retype_new_password') }}"
                                                                class="form-control @error('new_password')
                                                            is-invalid
                                                                @enderror">
                                                            @error('retype_new_password')
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <button class="btn btn-primary" type="submit">Change
                                                        Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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
