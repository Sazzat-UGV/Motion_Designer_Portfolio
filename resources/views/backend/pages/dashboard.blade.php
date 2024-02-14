@extends('backend.layout.master')
@section('title')
    Dashboard
@endsection
@push('admin_style')

@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb',['main_page'=>'Dashboard'])
    <div class="container-fluid">
        <h1 class="text-center">Admin Dashboard</h1>
    </div>
@endsection
@push('admin_script')

@endpush
