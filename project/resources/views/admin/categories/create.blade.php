@extends('layouts.admin.master')


@section('title', 'Admin Dashboard | Create Category')

@section('page-header-title')
    <h1 class="m-0">Create a Category</h1>
@endsection

@section('bread-crumb')
    @parent
    <li class="breadcrumb-item">Categories</li>
    <li class="breadcrumb-item active">Create Category</li>
@endsection

@section('main-content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dashboard.categories.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="category-name"
                                        placeholder="Enter Category Name Here">
                                </div>

                                <div class="form-group">
                                    <label for="category-description">Category Description</label>
                                    <textarea name="description" class="form-control" id="category-description"
                                        placeholder="Enter Category Description Here"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category-parent-id">Parent Category</label>
                                    <select name="parent_id" class="form-control" id="category-parent-id">
                                        <option value="">Parent</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category-status">Category Status</label>
                                    <select name="status" class="form-control" id="category-status">
                                        <option value="active">Active</option>
                                        <option value="archived">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category-image">Category Image</label>
                                    <input type="file" name="image" class="form-control" id="category-image">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
