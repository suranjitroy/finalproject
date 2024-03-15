<!doctype html>
<html lang="en" class="fixed left-sidebar-top">


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/forms_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{ asset('vendor/pace/pace.min.js') }}"></script>
    <link href="{{ asset('vendor/pace/pace-theme-minimal.css') }}" rel="stylesheet" />
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href= "{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/animate.css/animate.css') }}">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('stylesheets/css/style.css') }}">
</head>

<body>
<div class="wrap">
    <!-- page HEADER -->
    <!-- ========================================================= -->
    @include('header-menu')
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body">
        <!-- LEFT SIDEBAR -->
        <!-- ========================================================= -->
        <div class="left-sidebar">
            <!-- left sidebar HEADER -->
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">JOBPULSE</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <!-- NAVIGATION -->
            <!-- ========================================================= -->
            @include('sidebar');
        </div>
        <!-- CONTENT -->
        <!-- ========================================================= -->
        <div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            @include('content-header');
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                <!--BASIC-->

                <div class="col-sm-12 col-md-12">
                        <h4 class="section-subtitle"><b>Company Information List</b></h4>
                        <div class="panel">
                            <div class="panel-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Job Name</th>
                                            <th>Job Position</th>
                                            <th>Job Description</th>
                                            <th>Skills</th>
                                            <th>Education</th>
                                            <th>Location</th>
                                            <th>Time</th>
                                            <th>Salary</th>
                                            <th>Company Info</th>
                                            <th>Company Name</th>
                                            <th>Company Category Name</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($datas as $data)   
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->job_name }}</td>
                                            <td>{{ $data->job_position }}</td>
                                            <td>{!! $data->job_description !!}</td>
                                            <td>{{ implode(', ', $data->skills) }}</td>
                                            <td>{{ $data->education }}</td>
                                            <td>{{ $data->location }}</td>
                                            <td>{{ $data->time }}</td>
                                            <td>{{ $data->salary }}</td>
                                            <td>{{ $data->company_info }}</td>
                                            <td>{{ $data->companie->name }}</td>
                                            <td>{{ $data->companycategory->name }}</td>
                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{ route('jobedit', $data->id) }}"class="btn btn-transparent"><i class="fa fa-pencil"></i>
                                                    </a>
                                                    {{-- <a href="{{ route('companydelete', $data->id) }}"class="btn btn-transparent"><i class="fa fa-times"></i>
                                                    </a> --}}
                     <form  action="{{ route('admin.job.delete', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                               <button class="btn btn-transparent"><i class="fa fa-times"></i>
                                               </button>
                                            </form>
                                                    
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
        <!-- RIGHT SIDEBAR -->
        <!-- ========================================================= -->
           

        <!--scroll to top-->
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<!--BASIC scripts-->
@include('footer-common')
</body>


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/forms_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:56 GMT -->
</html>
