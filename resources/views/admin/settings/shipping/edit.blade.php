@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Shipping</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-12 col-md-6 card p-3 mx-auto">
                    <form action="{{ route('setting.shipping.update', $data->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" style="width: 100%;text-align:start">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $data->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location" style="width: 100%;text-align:start">Location</label>
                            <select name="location" id="location" class="form-select">
                                <option value="">Select Location</option>
                                <option value="1" @if ($data->location == 1) selected @endif>Inside Dhaka
                                </option>
                                <option value="2" @if ($data->location == 2) selected @endif>OutSide Dhaka
                                </option>
                            </select>
                            @error('title')
                                <span class="text-danger">{{ $location }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="charge" style="width: 100%;text-align:start">Charge</label>
                            <input type="number" name="charge" id="charge" class="form-control"
                                value="{{ old('charge', $data->charge) }}">
                            @error('charge')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="time" style="width: 100%;text-align:start">Time </label>
                            <input type="text" name="time" id="time" class="form-control"
                                value="{{ old('time', $data->time) }}">
                            @error('time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
