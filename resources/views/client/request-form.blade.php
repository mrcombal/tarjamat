<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project request | StreamedOps</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/PACE/themes/blue/pace-theme-flash.css')}}">
    <script type="text/javascript" src="{{asset('plugins/PACE/pace.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/first-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/checkbox-radio/checkbox_radio_font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery.radiosforbuttons/bootstrap-buttons.min.css')}}">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body style="background-color: #000232;" class="body-bg-full v3">
    <div class="container page-container">
        <div class="page-content" style="background-color: #c1272d;">
            <div class="main-content">
                <div class="v3" style="width: 400px;">
                    <!--<div class="logo"><img src="{{asset('images/logo-emblem.svg')}}" alt="" width="80"></div>-->
                    <h1 class="" style="font-size: 1.8em;font-weight: bold;color: #454545;text-transform: capitalize">
                        <span style="font-weight: 100;color: #c1282e;">Project</span> request</h1>
                    <form method="post" class="form-horizontal">
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

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" placeholder="Company or organization" class="form-control" name="client">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" placeholder="Email address" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" placeholder="Expected schedule" class="form-control" id="date-range" name="schedule">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="delivery-language">
                                    <input type="radio" name="language" value="Arabic" id="arabic" checked>
                                    <label for="arabic">Delivery in Arabic</label>
                                    <input type="radio" name="language" value="English" id="english">
                                    <label for="english">Delivery in English</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea name="brief" id="brief" cols="30" rows="5" class="form-control" placeholder="Project brief"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="instructor-type">
                                    <input type="radio" name="nationalities" value="arab" id="arab" checked>
                                    <label for="arab">Arab instructors</label>
                                    <input type="radio" name="nationalities" value="western" id="western">
                                    <label for="western">Western instructors</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input id="daily-rate" type="text" placeholder="Daily rate" class="form-control" name="daily_rate" data-mask="#.##0,00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input id="training-days" type="text" placeholder="Training days" class="form-control" name="days">
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="checkbox checkbox-xs mr-10">
                                    <input type="checkbox" name="cvs" value="1">
                                    <i class="fa fa-lg icon-checkbox"></i> CVs
                                </label>

                                <label class="checkbox checkbox-xs">
                                    <input type="checkbox" name="outline" value="1">
                                    <i class="fa fa-lg icon-checkbox"></i> Outlines
                                </label>

                            </div>
                        </div>
                        <button type="submit" class="btn-lg btn btn-primary btn-rounded btn-block">Sign up</button>
                    </form>
                </div>
            </div>
            <div class="sub-content">
                <div style="padding:24px; width: 400px; position: relative">
                    <h1 class="mb-20" style="font-size: 1.8em;font-weight: bold;color: #fff;text-transform: capitalize">
                        <span style="font-weight: 100; font-size:0.8em;">New project?</span><br>No problem!</h1>
                    <p class="text-white mb-20">Are you ready to kick off your next training project?</p>
                    <p class="text-white mb-20">Send us what training requirement do you need through the Project Request form, and we will take it from there.</p>
                    <img src="{{asset('images/streamedops-white-logo.svg')}}" style="position:absolute; bottom:-100px;">
                </div>
            </div>

            <!--
            <div class="v2" style="box-shadow:none; padding: 40px 20px 20px 20px;">
                <div class="logo"><img src="{{asset('images/streamedops-colored-logo.svg')}}" alt="" style="max-width: 250px;"></div>
                <form method="post" class="form-horizontal">
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
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="email" placeholder="E-mail" class="form-control" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn btn-primary btn-block" style="margin-top:20px;">Sign in</button>
                </form>
            </div>
            -->
        </div>
    </div>

    <script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery.radiosforbuttons/jquery.radiosforbuttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            let schedule_input = $('#date-range');
            let date_range_text = '';
            schedule_input.daterangepicker({
                autoUpdateInput: !1
            });
            schedule_input.on('apply.daterangepicker', function(ev, picker) {
                date_range_text = picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY');
                schedule_input.val(date_range_text);
            });
            schedule_input.on('cancel.daterangepicker', function(ev, picker) {
                schedule_input.val('');
            });

            $('.instructor-type').radiosforbuttons();
            $('.delivery-language').radiosforbuttons();


            $('#daily-rate').mask("#,###,000 usd", {reverse: true});
            $('#training-days').mask("#,###,000 days", {reverse: true});

        });
    </script>

  </body>
</html>
