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
                    <ul aria-expanded="false">
                        <li><a href="{{ route('all/student/list') }}">All Students</a></li>
                        <li><a href="{{ route('add/student/new') }}">Add Students</a></li>
                        {{-- <li><a href="{{ route('student/edit') }}">Edit Students</a></li> --}}
                        <li><a href="{{ route('student/about') }}">About Students</a></li>
                    </ul>
                </ul>
            </li>
        

        </ul>
    </div>
</div>