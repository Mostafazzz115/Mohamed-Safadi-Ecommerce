@extends('layouts.admin.master')


@section('title', 'Admin Dashboard | Create Category')

@section('page-header-title')
    <h1 class="m-0">Edit {{ $currentCategory->name }} </h1>
@endsection

@section('bread-crumb')
    @parent
    <li class="breadcrumb-item">Categories</li>
    <li class="breadcrumb-item">Edit Category</li>
    <li class="breadcrumb-item active">{{ $currentCategory->name }}</li>
@endsection

@section('main-content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dashboard.categories.update' , $currentCategory->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="category-name"
                                        placeholder="Enter Category Name Here" value="{{ $currentCategory->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="category-description">Category Description</label>
                                    <textarea name="description" class="form-control" id="category-description"
                                        placeholder="Enter Category Description Here">{{ $currentCategory->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category-parent-id">Parent Category</label>
                                    <select name="parent_id" class="form-control" id="category-parent-id">
                                        <option value="" {{ $currentCategory->id == '' ? 'selected' : '' }}>Parent</option>
                                        @foreach ($parent_categories as $category)
                                            <option value="{{ $category->id }}" {{ $currentCategory->parent_id == $category->id ? 'selected' : '' }}> {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category-status">Category Status</label>
                                    <select name="status" class="form-control" id="category-status">
                                        <option value="active" {{ $currentCategory->status == "active" ? 'selected' : '' }}>Active</option>
                                        <option value="archived" {{ $currentCategory->status == "archived" ? 'selected' : '' }}>Inactive</option>
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
