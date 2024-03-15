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
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap.min.css') }}">
<!-- ========================================================= -->
    <link rel="stylesheet" href= "{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/animate.css/animate.css') }}">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('stylesheets/css/style.css') }}">
       <!-- ========================================================= -->
       <link rel="stylesheet" href="{{ asset('stylesheets/css/style.css') }}">
       <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
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
                <div class="col-sm-12 col-md-7">
                    <h4 class="section-subtitle"><b>Job</b> Entry</h4>
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
                                    <form action="{{ route('admin.jobupdate', $data->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="name">Job Name</label>
                                            <input type="text" value="{{ $data->job_name}}" class="form-control" id="name" name="job_name" placeholder="Job Title">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="mobile">Job Position</label>
                                            <input type="textarea" value="{{ $data->job_position }}"  class="form-control" id="mobile" name="job_position" placeholder="Mobile No">
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Job Description</label>
                                            <textarea class="form-control" id="address" name="job_description" rows="5">{{ $data->job_description }} </textarea>
                                            
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="skills">Skills</label>
                                            <input type="text" value="{{ implode(',',$data->skills) }}" class="form-control" id="skills" name="skills" placeholder="Skills">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Skills</label>
                                            <div class="col-sm-10">
                                                <select name="skills[]" id="select2-example-multiple" class="form-control " multiple="multiple" style="width: 100%" placeholder="test">
                                                    <option value=""></option>
                                                        <option value=" PHP" label="php"
                                                        @if(in_array('PHP', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >PHP</option>
                                                        <option value="Javascript" label="Antigua and Barbuda"
                                                        @if(in_array('Javascript', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >Javascript</option>
                                                        <option value="Python" label="Python" 
                                                        @if(in_array('Python', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >Python</option>
                                                        <option value="Java" label="Java" 
                                                        @if(in_array('Java', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >Java</option>
                                                        <option value="React JS" label="ReactJS" 
                                                        @if(in_array('React JS', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >React JS</option>
                                                        <option value="Vue JS" label="VueJS" 
                                                        @if(in_array('Vue JS', $data->skills ) ) 
                                                        selected="selected" @endif
                                                        >Vue JS</option>
                                                        <option value="C" label="C" 
                                                        @if(in_array('C', $data->skills ) ) 
                                                        selected="selected" @endif   
                                                        >C</option>
                                                        <option value="C++" label="C++"
                                                        @if(in_array('C++', $data->skills ) ) 
                                                        selected="selected" @endif
                                                        >C++</option>
                                                        <option value="Laravel" label="Laravel"
                                                        @if(in_array('Laravel', $data->skills ) ) 
                                                        selected="selected" @endif
                                                        >Laravel</option>

                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="education">Education</label>
                                            <textarea class="form-control" id="education" name="education" rows="5" cols="8">{{ $data->education }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" id="location" value="{{ $data->location }}" name="location">
                                        </div>

                                        <div class="form-group">
                                            <label for="time">Time</label>
                                            <input type="text" class="form-control" id="time" name="time" value="{{ $data->time }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="salary">Salary</label>
                                            <input type="text" class="form-control" id="salary" value="{{ $data->salary }}" name="salary">
                                        </div>

                                        <div class="form-group">
                                            <label for="company_info">Company Info</label>
                                            <textarea class="form-control" id="company_info" name="company_info" rows="5" cols="8">
                                                {{ $data->company_info }}
                                            </textarea>
                                        </div>
                                    

                                        <div class="form-group">
                                            <label for="companie_id">Company</label>
                                            <select name="company_id" id="company" class="form-control" style="width: 100%">
                                                

                                                    @foreach($companies as $companie)
                                                    <option value="{{ $companie->id }}" @if($companie->id == $jobcom->id) selected = "selected" @endif>{{ $companie->name}}</option>
                                                    @endforeach

                                                
                                            </select>
                                        </div>
                                       

                                        <div class="form-group">
                                            <label for="mobile">Category</label>
                                            <select name="category_id" id="category" class="form-control" style="width: 100%">
                                                
                                           @foreach($categories as $categorie)
                                         <option value="{{ $categorie->id }}" @if($categorie->id == $jobcat->id) selected="selected" @endif>{{ $categorie->name}}</option>
                                          @endforeach
                                              
                                                
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <script>
                                            CKEDITOR.replace('job_description');
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
           
        </div>
        <!-- RIGHT SIDEBAR -->
            

        <!--scroll to top-->
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<!--BASIC scripts-->
@include('footer-common')
</body>


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/forms_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:56 GMT -->
</html>
