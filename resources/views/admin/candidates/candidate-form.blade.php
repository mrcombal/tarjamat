@extends('admin.master')

@section('title')
    @if($method == 'post')
        New candidate
    @else
        Edit candidate: {{$candidate->name}}
    @endif
@stop

@section('title2')
    @if($method == 'post')
        New candidate
    @else
        Edit candidate: {{$candidate->name}}
    @endif
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('candidate.list')}}">candidates</a></li>
        @if($method == 'post')
            <li class="active">New candidate</li>
        @else
            <li>{{$candidate->name}}</li>
        @endif
    </ol>
@stop

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app/css/flat.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100%;
            margin-bottom:20px;
            height: 39px;
            line-height: 39px;
        }
        .select2-container--default .select2-selection--multiple, .select2-dropdown {
            border-color: #e6e6e6 !important;
        }
        .select2-container .select2-search--inline .select2-search__field {
            vertical-align: middle;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            height: 46px;
            line-height: 46px;
        }

        .select2-container--default .select2-selection--single {
            height: 46px;
            line-height: 46px;
            border-radius: 0;
            border-color: #e6e6e6 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 9px;
        }
        .input-lg {
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
    </style>
@stop

@section('content')
    <div class="widget" style="padding: 0 15px;">

        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">
                    @if($method == 'post')
                        New candidate
                    @else
                        Edit candidate: {{$candidate->name}}
                    @endif
                </h3>
            </div>

            <div class="widget-body">

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

                @if(session()->has('message'))
                    <div class="alert alert-success col-md-12">
                        {!! Session::get('message') !!}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="control-label">Name</label>
                                <input id="name" type="text" class="form-control input-lg mb-20" name="name" value="{{$candidate->name}}" placeholder="First name and last name">
                            </div>
                            <div class="col-md-6">
                                <label for="tagline" class="control-label">Tagline</label>
                                <input id="tagline" type="text" class="form-control input-lg mb-20" name="tagline" value="{{$candidate->tagline}}" placeholder="Ex: Digital Product Manager">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="email" class="form-control input-lg mb-20" name="email" value="{{$candidate->email}}" placeholder="example@domain.com">
                            </div>
                            <div class="col-md-6">
                                <label for="mobile" class="control-label">Mobile</label>
                                <input id="mobile" type="text" class="form-control input-lg mb-20" name="mobile" value="{{$candidate->mobile}}" placeholder="+201234567890">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="gender" class="control-label">Gender</label>
                                <select name="gender" id="gender" class="form-control input-lg mb-20">
                                    <option value="male" {{ ($candidate == 'male') ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ ($candidate == 'female') ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="control-label">Nationality</label>
                                <select name="country_id" id="nationality" class="form-control input-lg mb-20">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="resume" class="control-label">Resume</label>
                        <input id="resume" type="file" class="form-control input-lg" name="resume_file">
                        <p class="muted mt-0" style="font-size: smaller;">Only .doc, .docx and pdf formats are supported. File size shouldn't exceed 5 MB.</p>

                        <label for="skills" class="control-label">Skills</label>
                        <select name="skills[]" id="skills" class="form-control input-lg" multiple style="width: 100%;">
                            @foreach($skills as $skill)
                                <option value="{{$skill->id}}">{{$skill->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="image_file" class="control-label text-left" style="display: block;">Picture</label>
                        <label for="image_file" style="border:1px solid #e6e6e6; display:inline-block; padding: 3px; width: 100%">
                            @if(!$candidate->image_file)
                                <div class="img-container-list">
                                    <img src="{{asset('images/avatar-male.svg')}}" id="candidate-image" style="width: 100%; border-radius: 50%;">
                                    <p class="text-center mt-20">click to change image</p>
                                    <p class="text-muted text-center" style="font-size: 10px;">Image will be resized to 400x400 pixels. It is recommended to be in 1x1 aspect ratio with no borders.</p>
                                </div>
                                <input type="file" name="image_file" id="image_file" style="display: none;">
                            @endif
                        </label>
                        <br/>

                    </div>
                </div>
                <hr>
                <h4>Courses</h4>
                <div class="row mb-10">
                    <div class="col-md-8">Course name</div>
                    <div class="col-md-2">Experience</div>
                    <div class="col-md-2">Tier</div>
                </div>
                <div id="courses-list">
                    <div class="row course-entry" id="course-entry" style="position:relative;">
                        <div class="col-md-8">
                            <select name="courses[]" class="form-control input-lg courses" style="width: 100%;">
                                    <option></option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input id="experience" type="number" class="form-control input-lg mb-20" name="experiences[]" placeholder="in years">
                        </div>
                        <div class="col-md-2">
                            <select name="tiers[]" class="form-control input-lg tiers" style="width: 100%;">
                                <option></option>
                                <option value="1">Tier 1</option>
                                <option value="2">Tier 2</option>
                                <option value="3">Tier 3</option>
                                <option value="4">Tier 4</option>
                            </select>
                        </div>
                        <button class="btn remove-course-btn" type="button"><i class="ti-trash"></i></button>
                    </div>
                </div>

                <button type="button" class="btn btn-info" id="add-course"><i class="ti-plus"></i> add another course</button>
                <br>




                <input type="submit" value="Save" class="btn btn-primary btn-lg mt-20">
                <a href="{{route('candidate.list')}}" class="btn btn-default btn-lg mt-20">Cancel</a>
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(document).ready(function() {
            let main_course_entry = $('#course-entry');
            let courses_template = main_course_entry.clone().removeAttr('id');
            main_course_entry.find('.remove-course-btn').remove();
            let course_list = $('#courses-list');
            $('#skills').select2({
                width: 'resolve'
            });
            $('.tiers').select2({
                width: 'resolve',
                placeholder: 'select a tier..'
            });
            $('.courses').select2({
                width: 'resolve',
                placeholder: 'select a course..'
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

            /******/

            $('body').on('click', '.remove-course-btn', function() {
                $(this).closest('.course-entry').remove();
            });

        });
    </script>
@endsection
