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
                        <h4>Add Student</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Student Add</a></li>
                    </ol>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Info</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add/student/save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control @error('firstName') is-invalid @enderror" value="{{ old('firstName') }}" name="firstName" id="firstName">
                                            @error('firstName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control @error('lastName') is-invalid @enderror" value="{{ old('lastName') }}" name="lastName" id="lastName">
                                            @error('lastName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Registration Date</label>
                                            <input type="text" class="datepicker-default form-control @error('registrationDate') is-invalid @enderror" value="{{ old('registrationDate') }}" name="registrationDate" id="datepicker">
                                            @error('registrationDate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Roll No.</label>
                                            <input type="text" class="form-control @error('rollNo') is-invalid @enderror" value="{{ old('rollNo') }}" name="rollNo" id="rollNo">
                                            @error('rollNo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Class</label>
                                            <select class="form-control @error('class') is-invalid @enderror" value="{{ old('class') }}" name="class" id="class">
                                                <option selected disabled>Slect class</option>
                                                <option value="Class">Class</option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="angular">Angular</option>
                                                <option value="angular">React</option>
                                                <option value="vuejs">Vue.js</option>
                                                <option value="ruby">Ruby</option>
                                                <option value="php">PHP</option>
                                                <option value="asp">ASP.NET</option>
                                                <option value="python">Python</option>
                                                <option value="mysql">MySQL</option>
                                            </select>
                                            @error('class')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <select class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" name="gender" id="gender">
                                                <option selected disabled>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="tel" class="form-control @error('mobileNumber') is-invalid @enderror" value="{{ old('mobileNumber') }}" name="mobileNumber" id="mobileNumber">
                                            @error('mobileNumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Parents Name</label>
                                            <input type="text" class="form-control @error('parentsName') is-invalid @enderror" value="{{ old('parentsName') }}" name="parentsName" id="parentsName">
                                            @error('parentsName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Parents Mobile Number</label>
                                            <input type="text" class="form-control @error('parentsMobileNumber') is-invalid @enderror" value="{{ old('parentsMobileNumber') }}" name="parentsMobileNumber" id="parentsMobileNumber">
                                            @error('parentsMobileNumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="text" class="datepicker-default form-control @error('dateOfBirth') is-invalid @enderror" value="{{ old('dateOfBirth') }}" name="dateOfBirth" id="datepicker1">
                                            @error('dateOfBirth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group</label>
                                            <input type="text" class="form-control @error('bloodGroup') is-invalid @enderror" value="{{ old('bloodGroup') }}" name="bloodGroup" id="">
                                            @error('bloodGroup')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" id="address" rows="5"></textarea>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group fallback w-100">
                                            <input type="file" class="dropify @error('upload') is-invalid @enderror" value="{{ old('upload') }}" data-default-file="upload" name="upload" id="upload">
                                            @error('upload')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-light">Cencel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection