@extends('layouts.studentmain')
@section('title', 'Add a Student Record')
@section('content')
<div class="container-fluid">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form class="border border-light p-4" action="{{ url('student/send') }}" method="GET">
    {{ csrf_field() }}
    
        <h1 class="text-center">Request Medical Certificate</h1>
        <div class="row">
            <div class="col">
               
            </div>
            <div class="col">
                 <div class="form-group">
                    
                    <input name="name" type="text" class="form-control" placeholder="Your name" />
                </div>
                <div class="form-group">
                    
                    <input name="course" type="text" class="form-control" placeholder="Course" />
                </div>
                <div class="form-group">
                    
                    <input name="idnum" type="number" class="form-control" placeholder="ID number" maxlength="8" />
                </div>
                <div class="form-group">
                   
                   <textarea class="form-control" placeholder="Reason for request" name="message"></textarea>
                </div>
               
              
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection