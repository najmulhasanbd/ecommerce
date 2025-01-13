@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Attribute Value</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row-2">
                <div class="col-12 col-md-5 mx-auto card p-3">
                    <div class="form-group">
                        <h4>Attribute : <strong>{{ ucwords($attribute->name) }}</strong></h4>
                    </div>
                </div>
                <div class="col-12 col-md-5 mx-auto card p-3">
                    <form action="{{ route('attribute-value.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="attribute_id" value="{{ $attribute->id }}">
                        <div class="form-group">
                            <label for="name" style="width: 100%;text-align:start">Value Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="enter unit name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Attribute</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ ucwords($attribute->name) }}</td>
                                            <td>{{ ucwords($item->name) }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('attribute-value.inactive', $item->id) }}"
                                                        id="inactive" class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('attribute-value.active', $item->id) }}"
                                                        id="active" class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('attribute-value.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i>
                                                </a> --}}
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#updateValue{{ $item->id }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i></a>
                                                <a href="{{ route('attribute-value.delete', $item->id) }}" id="delete"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="updateValue{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                            {{ ucwords($attribute->name) }} Value
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('attribute-value.update', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name"
                                                                    style="width: 100%; text-align:start">Value Name</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="form-control" value="{{ $item->name }}">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-success mt-2">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div>
    </div>
@endsection
