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
                    <form action="{{ route('setting.page.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" style="width: 100%;text-align:start">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                 value="{{ old('name',$data->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title" style="width: 100%;text-align:start">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="enter title title" value="{{ old('title',$data->title) }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" style="width: 100%;text-align:start">Description</label>
                            <textarea name="description" id="description" cols="30" class="form-control" rows="10">{{ old('title',$data->description) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
