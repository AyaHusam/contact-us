@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <a href="{{('/')}}" class="btn btn-primary"> Show all contant</a>
            <form action="{{url('/store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control"  name="First_Name" id="inputFirstName" >
                            @error('First_Name')
                            <p style="color: red" ;>{{$message}}</p>
                       @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="inputLastName" >
                            @error('last_name')
                            <p style="color: red" ;>{{$message}}</p>

                       @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control"  name="Email" id="inputEmail" >
                    @error('Email')
                    <p style="color: red" ;>{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="Add Contact">
            </form>

        </div>
    </div>
</div>
@endsection
