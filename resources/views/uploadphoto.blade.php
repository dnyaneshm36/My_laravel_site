
@extends('layouts.app')



 @section('content')

    <form action="{{ url('/store') }}" method="post"  enctype="multipart/form-data">


    {{ csrf_field() }}

             <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading" ><h3 align="center">Upload Profile.<h3></div>
                                <div class="panel-body">
                                  @if (session('status'))
                                       <div class="alert alert-success" role="alert">
                                           {{ session('status') }}
                                       </div>
                                   @endif
                                  <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                        <label for="photo" class="col-md-4 control-label">Image.</label>

                                        <div class="col-md-6">
                                            <input id="photo" type="file" class="form-control" name="photo"  >

                                            @if ($errors->has('photo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('photo') }}</strong>
                                                </span>
                                            @endif

                                    <br>
                                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class=" fa fa-upload"></i>  Upload
                                </button>
                            </div>
                        </div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                        </div>
                    </div>
              </div>
        </form>





  @endsection
