@extends('backend.layouts.master')
@section('content')
<div class="layout-px-spacing">
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <h4>All Parts</h4>
                        </div>
                        @if($flash=session('message'))
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button> <strong>Success!</strong> {{$flash}} </div>
                        </div>
                        @elseif($flash=session('error'))
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>{{$flash}}</div>

                        </div>
                        @endif
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <table id="style-3" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column text-center"> ID </th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Part Number</th>
                                    <th class="text-center">China Price</th>
                                    @if(!$category=='disk') <th class="text-center">Taiwan Price</th> @endif
                                    @if($category=='arm' || category=='shocker' || category=='disk') <th class="text-center">Japan Price</th> @endif
                                    @if($category=='shocker') <th class="text-center">KYB Price</th> @endif
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($parts as $part)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$part->id}} </td>
                                    <td class="text-center">{{$part->name}}</td>
                                    <td class="text-center">{{$part->part_number}}</td>
                                    <td class="text-center">{{$part->china_price}}</td>
                                    @if(!$part->category=='disk') <td class="text-center">{{$part->taiwan_price}}</td> @endif
                                    @if($part->category=='arm' || $part->category=='shocker' || $part->category=='disk') <td class="text-center">{{$part->japan_price}}</td> @endif
                                    @if( $part->category=='shocker') <td class="text-center">{{$part->kyb_price}}</td> @endif
                                    <td class="text-center">{{$part->category}}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href="{{ route('part.edit', $part->id) }}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{__('Edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                    </svg></a></li>
                                            <li><a href="{{ route('delete_part', $part->id) }}" onclick="return confirm('Are you sure you want to delete this part?');" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg></a></li>
                                        </ul>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection