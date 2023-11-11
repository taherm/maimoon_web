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
                                <h4>Edit Part (Bush & Wheel Bearing)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('bush.update', $bush->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="inputState">Category</label>
                                    <select id="inputState" name="category" class="form-control" required>
                                        <option value="bush" {{ $bush->category == 'bush' ? 'selected' : '' }}>Bush</option>
                                        <option value="wheel_bearing" {{ $bush->category == 'wheel_bearing' ? 'selected' : '' }}>Wheel Bearing</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Car</label>
                                    <input type="text" class="form-control" name="car" id="inputEmail4" value="{{$bush->car}}" required>
                                    @error('car')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Part Number</label>
                                    <input type="text" class="form-control" name="part_number" id="inputEmail4" value="{{$bush->part_number}}" required>
                                    @error('part_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Size</label>
                                    <input type="text" class="form-control" name="size" id="inputEmail4" value="{{$bush->size}}" required>
                                    @error('size')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Edit Part</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection