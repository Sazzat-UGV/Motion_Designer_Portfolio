@extends('backend.layout.master')
@section('title')
    All Projects
@endsection
@push('admin_style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush
@section('content')
    @include('backend.layout.inc.breadcrumb', ['main_page' => 'All Projects'])
    <div class="container-fluid">
        <div class="card px-4">
            <div class="col-md-12 col-lg-12 col-sm-12 py-4">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('project.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>
                        Add New Project
                    </a>
                </div>
            </div>
            <div class="table-responsive text-nowrap my-2">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Created at</th>
                            <th>Thumbnail</th>
                            <th>Project Title</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $index => $project)
                            <tr>
                                <td><b>{{ $index + 1 }}</b></td>
                                <td>{{ $project->created_at->diffForHumans() }}</td>
                                <td style="padding: 1px !importent"><img
                                        src="{{ asset('uploads/project') }}/{{ $project->thumbnail }}" alt=""
                                        class="w-50 img-thumbnail"></td>
                                <td>{{ Str::limit($project->project_title, 70, '...') }}</td>
                                <td>
                                    <div class="dropdown custom-dropdown">
                                        <button type="button" class="btn btn-sm btn-outline-primary"
                                            data-bs-toggle="dropdown" aria-expanded="false">Action
                                            <i class="fa fa-angle-down ms-3"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a class="dropdown-item"
                                                href="{{ route('project.show', $project->project_title_slug) }}">View</a>
                                            <a class="dropdown-item"
                                                href="{{ route('project.edit', $project->project_title_slug) }}">Edit</a>

                                            <form action="{{ route('project.destroy', $project->project_title_slug) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item show_confirm" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                pagingType: 'first_last_numbers',
            });


            $('.show_confirm').click(function(event) {
                let form = $(this).closest('form');
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        });
    </script>
@endpush
