<!doctype html>
<html lang="en" class="fixed left-sidebar-top">


{{-- <!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/forms_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:56 GMT -->
@include('header') --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png')}}">
    <!--load progress bar-->
    <script src="{{ asset('vendor/pace/pace.min.js') }}"></script>
    <link href= "{{ asset('vendor/pace/pace-theme-minimal.css') }}" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href= "{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href= "{{ asset('vendor/animate.css/animate.css') }}">
    <!--SECTION css-->
    <!-- ========================================================= -->
<!--Select with searching & tagging-->
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap.min.css') }}">
<!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href= "{{ asset('vendor/toastr/toastr.min.css') }}">
    <!--Magnific popup-->
    <link rel="stylesheet" href= "{{ asset('vendor/magnific-popup/magnific-popup.css') }}">
    <!--TEMPLATE css-->
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
                                    <form  action="{{ route('jobentry') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="job_name">Job Name</label>
                                            <input type="text" class="form-control" id="job_name" name="job_name" 
                                            value="{{ old('job_name') }}">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="job_position">Job Position</label>
                                            <input type="text" class="form-control" id="job_position" name="job_position" value="{{ old('job_position') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="job_description">Job Description</label>
                                            <textarea class="form-control" id="address" name="job_description" rows="5" cols="8">
                                                {{ old('job_description') }}  
                                            </textarea>
                                          
                                        </div>
                                        <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Skills</label>
                                            <div class="col-sm-10">
                                                <select name="skills[]" id="select2-example-multiple" class="form-control " multiple="multiple" style="width: 100%" placeholder="test">
                                                    <option value=""></option>
                                                        <option value="{{ old('PHP', 'PHP') }}" label="php">PHP</option>
                                                        <option value="{{ old('Javascript','Javascript') }} " label="Antigua and Barbuda">Javascript</option>
                                                        <option value="{{ old('Python','Python') }}" label="Python" >Python</option>
                                                        <option value="{{ old('Java','Java') }}" label="Java" >Java</option>
                                                        <option value="{{ old('React JS','React JS') }}" label="ReactJS" >React JS</option>
                                                        <option value="{{ old('Vue JS', 'Vue JS') }}" label="VueJS" >Vue JS</option>
                                                        <option value="{{ old('C','C') }}" label="C" >C</option>
                                                        <option value="{{ old('C++','C++') }}" label="C++" >C++</option>
                                                        <option value="{{ old('Laravel','Laravel') }}" label="Laravel" >Laravel</option>

                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="education">Education</label>
                                            <textarea class="form-control" id="education" name="education" rows="5" cols="8">{{ old('education') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" id="location" value="{{ old('location') }}" name="location">
                                        </div>

                                        <div class="form-group">
                                            <label for="time">Time</label>
                                            <input type="text" class="form-control" id="time" name="time" value="{{ old('time') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="salary">Salary</label>
                                            <input type="text" class="form-control" id="salary" value="{{ old('salary') }}" name="salary">
                                        </div>

                                        <div class="form-group">
                                            <label for="company_info">Company Info</label>
                                            <textarea class="form-control" id="company_info" name="company_info" rows="5" cols="8">
                                                {{ old('company_info') }}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="companie_id">Company</label>
                                            <select name="company_id" id="company" class="form-control" style="width: 100%">
                                                    <option value=""></option>
                                                    @foreach($companies as $companie)
                                                    <option value="{{ old('company_id',$companie->id) }}">{{ $companie->name}}</option>
                                                    @endforeach                 
                                            </select>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="mobile">Company Category</label>
                                            <select name="category_id" id="category" class="form-control" style="width: 100%">
                                                <option value=""></option>
                                                    @foreach($categories as $categorie)
                                                    <option value="{{ old('category_id',$categorie->id) }}" label="">{{ $categorie->name}}</option>
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
<!-- ========================================================= -->
@include('footer-common')
 
</body>


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/forms_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:56 GMT -->
</html>


