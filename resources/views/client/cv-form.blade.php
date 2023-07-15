<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit your CV | StreamedOps</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/PACE/themes/blue/pace-theme-flash.css')}}">
    <script type="text/javascript" src="{{asset('plugins/PACE/pace.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/first-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/checkbox-radio/checkbox_radio_font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery.radiosforbuttons/bootstrap-buttons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    <style>
        .body-bg-full.v3 .page-container .page-content .main-content {
            width: 70%;
        }
        .body-bg-full.v3 .page-container .page-content .sub-content {
            width: 30%;
        }
        .body-bg-full.v3 .page-container .page-content .main-content .v3 {
            width: 100%;
            border-radius: 20px;
        }
        .body-bg-full .form-control {
            text-align: left;
        }
        .select2-container--default .select2-selection--multiple{
            border-color: #e6e6e6 !important;
            border-radius: 0;
        }
        .remove-course-btn {
            position: absolute;
            right: -15px;
            top: 10px;
            font-size: 9px;
            opacity: 0;
            transition: all 0.3s linear;
            border-radius: 50% !important;
            padding: 5px !important;
        }

        .remove-course-btn .ti {
            font-size: 10px;
        }

        .course-entry:hover  .remove-course-btn:hover {
            opacity: 1;
        }

        .course-entry:hover .remove-course-btn {
            display:block;
            opacity: .4;
        }
        .bootstrap-filestyle .form-control {
            background: #eee;
        }
        .form-horizontal .control-label {
            text-align: left;
        }
        .body-bg-full.v3 .form-control {
            border-color: #e6e6e6;
        }

        .icon-container {
            display: inline-block;
            border: 1px solid #c1272d;
            border-radius: 50%;
            padding: 10px;
        }
    </style>
</head>

<body style="background-color: #000232;" class="body-bg-full v3">
    <div class="container page-container">
        <div class="page-content" style="background-color: #c1272d;">
            <div class="main-content">
                <div class="v3">
                    <h1 class="text-left mt-0 mb-20" style="font-size: 1.8em;font-weight: bold;color: #454545;text-transform: capitalize"><span style="font-weight: 100;color: #c1282e;">Candidate</span> Registration</h1>
                    <hr>
                    @if(session()->has('message'))
                    <div class="success text-left">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="zmdi zmdi-check-circle" style="color: #c1272d; font-size: 13rem;"></i>
                            </div>
                            <div class="col-md-10">
                                <h2 style="font-size: 2.25rem; font-weight: bold; color: #454545; text-transform: capitalize; ">
                                    <span style="font-weight: 100;color: #c1282e;">Thank</span> you
                                </h2>
                                <p>{{session()->get('message')}}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if(!session()->has('message'))
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @if(count($errors) > 0)
                            <div class="alert alert-danger col-md-12">
                                @if(count($errors) == 1)
                                    {{$errors->first()}}
                                @else
                                    The following errors happened:
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endif



                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group row">
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" placeholder="Your name" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" placeholder="Tagline" class="form-control" name="tagline" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 col-xs-12">
                                        <input id="email" type="email" placeholder="Email address" class="form-control" name="email" required>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <input id="mobile" type="text" placeholder="Phone number" class="form-control" name="mobile" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 col-xs-12">
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <select name="country_id" id="nationality" class="form-control" required>
                                            <option>Nationality</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="image_file" style="width: 100%">
                                    <div class="img-container-list">
                                        <img src="{{asset('images/avatar-male.svg')}}" id="candidate-image" style="width: 90px; max-width: 90%; border-radius: 50%;">
                                        <p class="text-center mt-5 mb-0">Your photo</p>
                                        <p class="text-muted text-center" style="font-size: 10px;">Square images recommended</p>
                                    </div>
                                    <input type="file" name="image_file" id="image_file" style="display: none;">
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 col-xs-12">
                                <select name="skills[]" id="skills" class="form-control input-lg" multiple style="width: 100%;">
                                    @foreach($skills as $skill)
                                        <option value="{{$skill->id}}">{{$skill->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="file" name="resume_file" data-buttontext="CV file" data-buttonname="btn-outline btn-primary" data-iconname="ti-file" data-rule-required="true" class="filestyle">
                            </div>

                        </div>

                        <hr>

                        <div class="row text-left">
                            <div class="col-md-6">
                                <h4 class="text-left mt-0">Courses</h4>
                                <div class="row mb-10">
                                    <div class="col-md-8 text-left">Course name</div>
                                    <div class="col-md-4 text-left">Experience</div>
                                </div>
                                <div id="courses-list">
                                    <div class="row course-entry" id="course-entry" style="position:relative;">
                                        <div class="col-md-8">
                                            <select name="courses[]" class="form-control courses" style="width: 100%;">
                                                <option></option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="experience" type="number" class="form-control mb-20" name="experiences[]" placeholder="in years">
                                        </div>
                                        <button class="btn remove-course-btn" type="button"><i class="ti-trash"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default btn-outline" id="add-course"><i class="ti-plus"></i> add another course</button>

                            </div>
                            <div class="col-md-6">
                                <h4 class="text-left mt-0">Certificates</h4>
                                <div class="row mb-10">
                                    <div class="col-md-8 text-left">Certificate</div>
                                    <div class="col-md-4 text-left">Issued at</div>
                                </div>
                                <div id="certificates-list">
                                    <div class="row certificate-entry" id="certificate-entry" style="position:relative;">
                                        <div class="col-md-8">
                                            <select name="certificates[]" class="form-control certificates" style="width: 100%;">
                                                <option></option>
                                                @foreach($certificates as $certificate)
                                                    <option value="{{$certificate->id}}">{{$certificate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="experience" type="date" class="form-control mb-20" name="certification_dates[]" placeholder="in years">
                                        </div>
                                        <button class="btn remove-course-btn" type="button"><i class="ti-trash"></i></button>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-default btn-outline" id="add-certificate"><i class="ti-plus"></i> add another certificate</button>
                            </div>
                        </div>



                        <button type="submit" class="btn-lg btn btn-primary btn-block mt-20">Sign up</button>
                    </form>
                    @endif

                </div>
            </div>
            <div class="sub-content">
                <div style="padding:24px; width: 400px; position: relative">
                    <h1 class="mb-20" style="font-size: 1.8em;font-weight: bold;color: #fff;text-transform: capitalize">
                        <span style="font-weight: 100; font-size:0.8em;">Got what it takes?</span><br>Submit your CV</h1>
                    <p class="text-white mb-20">Are you a professional instructor? Want to make extra cash in training?</p>
                    <p class="text-white mb-20">Submit your CV to our instructors' database and we will reach out for training needs and job offers.</p>
                    <img src="{{asset('images/streamedops-white-logo.svg')}}" style="position:absolute; bottom:-100px;">
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery.radiosforbuttons/jquery.radiosforbuttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap-filestyle/src/bootstrap-filestyle.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            let main_course_entry       = $('#course-entry');
            let main_certificate_entry  = $('#certificate-entry');
            let courses_template        = main_course_entry.clone().removeAttr('id');
            let certificate_template    = main_certificate_entry.clone().removeAttr('id');
            main_course_entry.find('.remove-course-btn').remove();
            main_certificate_entry.find('.remove-certificate-btn').remove();
            let course_list = $('#courses-list');
            let certificate_list = $('#certificates-list');
            $('#skills').select2({ width: 'resolve', placeholder: 'Your skills..' });
            $('.courses').select2({
                width: 'resolve',
                placeholder: 'select a course..'
            });
            $('.certificates').select2({
                width: 'resolve',
                placeholder: 'select a certificate..'
            });
            $('#gender').on('change', function() {
                if(!$("#image_file").val()) {
                    let gender = $(this).val();
                    $('#candidate-image').attr('src', '/images/avatar-'+gender+'.svg');
                }
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#candidate-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image_file").change(function(){
                readURL(this);
            });

            /*******/

            $('#add-course').on('click', function() {
                course_list.append(courses_template.clone());
                course_list.find('.courses').last().select2({
                    width: 'resolve',
                    placeholder: 'select a course..'
                });
                course_list.find('.tiers').last().select2({
                    width: 'resolve',
                    placeholder: 'select a tier..'
                });
            });

            /*******/

            $('#add-certificate').on('click', function() {
                certificate_list.append(certificate_template.clone());
                certificate_list.find('.certificates').last().select2({
                    width: 'resolve',
                    placeholder: 'select a certificate..'
                });
            });

            /******/

            $('body').on('click', '.remove-course-btn', function() {
                $(this).closest('.course-entry').remove();
            });

            $('body').on('click', '.remove-certificate-btn', function() {
                $(this).closest('.certificate-entry').remove();
            });
        });
    </script>

  </body>
</html>
