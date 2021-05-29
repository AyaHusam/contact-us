@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="{{url('update/'.$contact->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control"  name="First_Name"  id="inputFirstName" value="{{$contact->Fname}}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="inputLastName"  value="{{$contact->lname}}" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control"  name="Email" id="inputEmail"  value="{{$contact->email}}" required>
                </div>

                <input type="submit" class="btn btn-primary" value="updata">
            </form>
        </div>
    </div>
</div>
@endsection
