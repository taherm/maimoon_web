@extends('backend.layouts.master')
@section('content')
<div class="layout-px-spacing">
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <h4>All Posts</h4>
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
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$post->id}} </td>
                                    <td class="text-center">{{$post->title}}</td>
                                    <td class="text-center">{{$post->created_at}}</td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <!-- <a class="dropdown-item" href="{{ route('admin.post.show', $post->id) }}">View</a> -->
                                                <a class="dropdown-item" href="{{ route('admin.post.edit', $post->id) }}">Edit</a>
                                                <form method="POST" action="{{ route('admin.post.destroy', $post->id) }}" class="dropdown-item"">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input name=" _method" value="delete" type="hidden">
                                                    <!-- <a onclick="javascript:$('form').submit();"><i class="material-icons">delete</i></a> -->
                                                    <button class="dropdown-item" onclick="return confirm('Are you sure you want to delete this post?');" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
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