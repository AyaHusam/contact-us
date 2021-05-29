@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h3>Contact List</h1>
                <a  class= "btn btn-danger" href="{{('create')}}"> create new contact </a>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">&nbsp</th>
                  <th scope="col">&nbsp</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ( $contact as  $contacts)
                <tr>
                  <th scope="row">{{$contacts->id}}</th>
                  <td>{{$contacts->Fname}}</td>
                  <td>{{$contacts->lname}}</td>
                  <td>{{$contacts->email}}</td>
                  <td>
                      <form action="{{url('delete/'.$contacts->id)}}" method="POST">
                        @csrf

                      <button type="submit" class="btn btn-danger">Delete</button></td>
                      </form>
                  <td>
                       <form action= "{{('edit/'.$contacts->id)}}"  method= "POST" >
                        @csrf
                           <button type="submit" class="btn btn-primary">Edit</button>
                       </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
