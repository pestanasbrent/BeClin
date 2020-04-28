@extends('layouts.adminhome')
@section('title', 'Register')
@section('content')
<div class="container-fluid">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form class="border border-light p-4" action="{{ route('users_clinicStore') }}" method="POST">
    {{ csrf_field() }}
    
        <h1 class="text-center">Clinic Register</h1>
        <div class="row">
            <div class="col">
               
                
               
            </div>
            <div class="col">
                
                <div class="form-group">
                    <label>First Name:</label>
                    <input name="fname" type="text" class="form-control"  />
                </div>
                <div class="form-group">
                    <label>Last Name:</label>
                    <input name="lname" type="text" class="form-control" />
                </div>
               <div class="form-group">
                    <label>ID Number:</label>
                    <input name="idNum" type="number" class="form-control" maxlength="8"/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input name="pwd" type="Password" class="form-control" />
                </div>
              
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                       Register
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection