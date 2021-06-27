@extends('layouts.st_master')
{{-- @section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')
<div class="dlabnav">
    <div class="dlabnav-scroll">
    <ul class="metismenu" id="menu">
              
        <li class="nav-label first">Main Menu</li>
          <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user-plus"></i>
                    <span class="nav-text">Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('userManagement') }}">All Users</a></li>
                </ul>
            </li>
    
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/student/list') }}">All Students</a></li>
                    <li><a href="{{ route('add/student/new') }}">Add Students</a></li>
                    {{-- <li><a href="{{ route('student/edit') }}">Edit Students</a></li> --}}
                    <li class="nav-item"><a href="#grid-view" data-toggle="tab">About Students</a></li>
                </ul>
            </li> 
        </li>  
     </ul>
    </div>
</div>

    
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Student</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Student</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
                        <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Students List  </h4>
                                    <a href="{{ route('add/student/new') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Roll No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Group</th>
                                                    <th>Date Of Birth</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($studentShow as $key => $student )
                                                <tr>
                                                    <td><strong>{{ ++$key }}</strong></td>
                                                    <td>
                                                        <img class="rounded-circle" width="35" src="{{ URL::to('/images/'. $student->upload) }}" alt="{{ $student->upload }}">
                                                    </td>
                                                    <td><strong>{{ $student->rollNo }}</strong></td>
                                                    <td>{{ $student->firstName }} {{ $student->lastName }}</td>
                                                    <td>{{ $student->gender }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td><a href="javascript:void(0);"><strong>{{ $student->mobileNumber }}</strong></a></td>
                                                    <td><a href="javascript:void(0);"><strong>{{ $student->bloodGroup }}</strong></a></td>
                                                    <td>{{ $student->dateOfBirth }}</td>
                                                    <td>
                                                        <a href="{{ url('student/edit/'.$student->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                        <a href="javascript:void(0);" onclick="return confirm('Are you sure to want to delete it?')" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                    </td>												
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="grid-view" class="tab-pane fade col-lg-12">
                            <div class="row">
                                @foreach ($studentShow as $student )
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card card-profile">
                                        <div class="card-header justify-content-end pb-0">
                                            <div class="dropdown">
                                                <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                    <span class="dropdown-dots fs--1"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0">
                                                    <div class="py-2">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="text-center">
                                                <div class="profile-photo">
                                                    <img class="rounded-circle" width="35" src="{{ URL::to('/images/'. $student->upload) }}" alt="{{ $student->upload }}">
                                                </div>
                                                <h3 class="mt-4 mb-1">{{ $student->firstName }} {{ $student->lastName }}</h3>
                                                <p class="text-muted">{{ $student->email }}</p>
                                                <ul class="list-group mb-3 list-group-flush">
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span>Roll No.</span><strong>{{ $student->rollNo }}</strong></li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Phone No. :</span><strong>{{ $student->mobileNumber }}</strong></li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Admission Date. :</span><strong>{{ $student->registrationDate }}</strong></li>
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span class="mb-0">Email:</span><strong>{{ $student->email }}</strong></li>
                                                </ul>
                                                <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="{{ route('student/about') }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection