@extends('layouts.adminhome')
@section('title', 'Login')
@section('content')
<div class="container-fluid">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form class="border border-light p-4" action="{{ route('session_adminstore') }}" method="POST">
    {{ csrf_field() }}
    
        <h1 class="text-center">Clinic Login</h1>
        <div class="row">
            <div class="col">
               
                
               
            </div>
            <div class="col">
            	
                <div class="form-group">
                    <label>ID Number:</label>
                    <input name="idNum" type="text" class="form-control"  />
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input name="pwd" type="Password" class="form-control" />
                </div>
              
              
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                       Login
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection