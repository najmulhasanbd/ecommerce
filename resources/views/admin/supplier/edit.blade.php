@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Cateogry</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-12 col-md-6 card p-3 mx-auto">
                    <form action="{{ route('supplier.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" style="width: 100%; text-align:start">Supplier Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $data->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group py-2">
                            <label for="mobile" style="width: 100%;text-align:start">Supplier Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control"
                                placeholder="enter supplier mobile" value="{{ old('mobile', $data->mobile) }}">
                            @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group pb-2">
                            <label for="address" style="width: 100%;text-align:start">Supplier Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="enter supplier address" value="{{ old('address', $data->address) }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
