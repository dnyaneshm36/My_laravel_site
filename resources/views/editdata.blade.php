
@extends('layouts.app')



 @section('content')




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
          var d = new Date();


            var today_ISO_date = d.getFullYear()+"-"+twoDigitMonth(d)+"-"+twoDigitDate(d); // in yyyy-mm-dd format

            document.getElementById('datepicker').setAttribute("value", today_ISO_date);

             var dd_mm_yyyy;
             $("#dob").change( function(){
               	changedDate = $(this).val(); //in yyyy-mm-dd format obtained from datepicker
                var date = new Date(changedDate);
                });

            });

        </script>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" ><h3 align="center">Update Profile.<h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/editstore') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @if (session('status'))
                                     <div class="alert alert-success" role="alert">
                                         {{ session('status') }}
                                     </div>
                                 @endif
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"  maxlength="50"  value="{{ Auth::user()->name }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                    <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                                    <div class="col-md-6">
                                        <input id="dob" type="date" class="form-control" name="dob" max="2020-1-20" value="{{ Auth::user()->dob }}">

                                        @if ($errors->has('dob'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">Mobile No.</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel" class="form-control" name="phone"  pattern="[0-9]{10}" value="{{ Auth::user()->phone }}">

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="address" class="col-md-4 control-label">Address.</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control" name="address" maxlength="100"  value="{{ Auth::user()->address }}">

                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group{{ $errors->has('devnagri') ? ' has-error' : '' }}">
                                    <label for="devnagri" class="col-md-4 control-label">Devnagri Name.</label>

                                    <div class="col-md-6">
                                        <input id="devnagri" type="text" class="form-control" name="devnagri"  value="{{ Auth::user()->devnagri }}" >

                                        @if ($errors->has('devnagri'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('devnagri') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"> </i>  Save
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  @endsection
