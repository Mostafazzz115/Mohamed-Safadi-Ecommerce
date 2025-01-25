@extends('layouts.admin.master')

@push('additional-styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('title', 'Admin Dashboard | Categoreies')

@section('page-header-title')
    <h1 class="m-0">Categories</h1> <a href="{{ route('dashboard.categories.create') }}"
        class="btn btn-primary btn-outline mt-10">Add New</a>
@endsection

@section('bread-crumb')
    @parent
    <li class="breadcrumb-item active">Categories</li>
@endsection

@section('main-content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="row mg-10">
                    <div class="col-12">
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}1</td>
                                            <td>{{ $category->name }}
                                            </td>
                                            <td>{{ $category->parent_id }}</td>
                                            <td> {{ $category->status }}</td>
                                            <td style="display: flex">
                                                <a href="{{ route('dashboard.categories.edit' , $category->slug) }}" class="btn btn-small btn-outline btn-primary">Edit</a>
                                                {{-- <a href="{{ route('dashboard.categories.destroy' , $category->id) }}" class="btn btn-small btn-outline btn-danger">Delete</a> --}}
                                                <form  action="{{ route('dashboard.categories.destroy' , $category->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-small btn-outline btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('additional-scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
