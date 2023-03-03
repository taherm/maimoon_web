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
                                <h4>Add Part</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('part.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="" required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">China Price</label>
                                    <input type="text" class="form-control" name="china_price" id="inputEmail4" placeholder="" required>
                                    @error('china_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Taiwan Price</label>
                                    <input type="text" class="form-control" name="taiwan_price" id="inputEmail4" placeholder="" required>
                                    @error('taiwan_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="inputState">Category</label>
                                    <select id="inputState" name="category" class="form-control" required>
                                        <option value="raditor">Raditor</option>
                                        <option value="disk">Disk</option>
                                        <option value="arm">Arm</option>
                                        <option value="shocker">Shocker</option>
                                    </select>
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