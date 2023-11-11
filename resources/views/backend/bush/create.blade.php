@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Part (Bush & Wheel Bearing)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('bush.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="inputState">Category</label>
                                    <select id="inputState" name="category" class="form-control" required>
                                        <option value="bush">Bush</option>
                                        <option value="wheel_bearing">Wheel Bearing</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Car</label>
                                    <input type="text" class="form-control" name="car" id="inputEmail4" placeholder="" required>
                                    @error('car')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Part Number</label>
                                    <input type="text" class="form-control" name="part_number" id="inputEmail4" placeholder="" required>
                                    @error('part_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Size (In*Out*Height)</label>
                                    <input type="text" class="form-control" name="size" id="inputEmail4" placeholder="" required>
                                    @error('size')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add Part</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection