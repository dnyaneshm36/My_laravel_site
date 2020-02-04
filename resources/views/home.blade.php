@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center">Fun fact<h4></div>

                <div class="panel-body">
                  <ul>
                         <li> The entire world's population could fit inside Los Angeles.    <br> </li>
                         <li> There are more twins now than ever before.    <br>   </li>
                         <li> There are more twins now than ever before.    <br></li>
                         <li> During your lifetime, you will produce enough saliva to fill two swimming pools.    <br></li>
                         <li> polar bears could eat as many as 86 penguins in a single sitting…    <br>
                         <li> Movie trailers were originally shown after the movie, which is why they were called “trailers”.    <br></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>


 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" ><h3 align="center">Information<h3></div>
                    <div class="panel-body">
                       <h5>name :  {{ Auth::user()->name }} </h5>
                        <h5>email :   {{ Auth::user()->email }} </h5>
                         <h5>dob :  {{ Auth::user()->dob }} </h5>
                          <h5>phone : {{ Auth::user()->phone }} </h5>
                           <h5>address : {{ Auth::user()->address }} </h5>
                            <h5>devnagri_name : {{ Auth::user()->devnagri }} </h5>

                    </div>
                  </div>
            </div>
        </div>
  </div>

@endsection
