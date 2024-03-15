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
                <div class="col-sm-12 col-md-5">
                    <h4 class="section-subtitle"><b>Company Information</b> Entry</h4>
                    <div class="panel">
                        <div class="panel-content">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                            @if(session()->has('delete-message'))
                            <div class="alert alert-danger">
                                {{ session('delete-message') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form  action="{{ route('companyinfo') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Company Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="5"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile">Mobile No</label>
                                            <input type="textarea" class="form-control" id="mobile" name="phn_no" placeholder="Mobile No">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                        <h4 class="section-subtitle"><b>Company Information List</b></h4>
                        <div class="panel">
                            <div class="panel-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Company Name</th>
                                            <th>Address</th>
                                            <th>Mobile No</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($datas as $data)   
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->phn_no }}</td>
                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{ route('companyedit', $data->id) }}"class="btn btn-transparent"><i class="fa fa-pencil"></i>
                                                    </a>
                                                    {{-- <a href="{{ route('companydelete', $data->id) }}"class="btn btn-transparent"><i class="fa fa-times"></i>
                                                    </a> --}}
                     <form  action="{{ route('againdelete', $data->id) }}" method="POST">
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
