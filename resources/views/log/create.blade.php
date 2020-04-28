@extends('layouts.adminmain')
@section('title', 'Activity Log')
@section('content')

<div class="container-fluid">
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form class="border border-light p-5" action="{{ route('log_store')}}" method="POST">
    {{ csrf_field() }}
        <h3 class="text-center">Please input your ID number and your concern inside the clinic.</h3>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>ID Number</label>
                    <input name="idno" type="text" class="form-control" maxlength="8" />
                </div>
                <div class="form-group">
                    <label>Concern</label>
                    <input name="con" type="text" class="form-control" maxlength="50" />
                </div>
                 <div class="form-group">
                    <label>Medicine / Note</label>
                    <input name="note" type="text" class="form-control" maxlength="100" />
                </div>
                 <button type="submit" class="btn btn-success">
                        Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection