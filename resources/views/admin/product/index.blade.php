@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Product</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0 fs-13">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>

                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('storage/products/' . $item->image) }}"
                                                    alt="{{ $item->name }}" width="50px" height="30px">
                                            </td>
                                            <td>{{ ucwords($item->name) }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->category_id }}</td>
                                            <td>{{ $item->subcategory_id }}</td>
                                            <td>{{ $item->brand_id }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ route('product.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <a href="{{ route('product.delete', $item->id) }}" id="delete"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div>
@endsection
