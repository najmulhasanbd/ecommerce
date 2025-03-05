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
                <div class="col-12 col-md-10 card p-3 mx-auto">
                    <form action="{{ route('coupon.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="coupon_name" style="width: 100%;text-align:start">coupon name </label>
                                    <input type="text" name="coupon_name" id="coupon_name" class="form-control"
                                        placeholder="enter coupon_name" value="{{ $data->coupon_name }}">
                                    @error('coupon_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="coupon_discount" style="width: 100%;text-align:start">Discount Amount</label>
                                    <input type="text" name="coupon_discount" id="coupon_discount" class="form-control"
                                        placeholder="enter coupon_discount" value="{{ $data->coupon_discount }}">
                                    @error('coupon_discount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="coupon_validity" style="width: 100%;text-align:start">Discount Validity</label>
                                    <input type="date" name="coupon_validity" id="coupon_validity" class="form-control">
                                    @error('coupon_validity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
