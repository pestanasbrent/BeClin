@extends('layouts.adminmain')
@section('title', 'Edit a Log Concern')
@section('content')
<div class="container-fluid">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form class="border border-light p-4" action="{{ route('log_update', $record->id) }}" method="POST">
    {{ csrf_field() }}
        <h1 class="text-center">Edit Log Concern</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>ID Number</label>
                    <input name="idno" type="text" class="form-control" maxlength="50" value="{{ $record->id_no }}"/>
                </div>
                <div class="form-group">
                    <label>Concern</label>
                    <input name="con" type="text" class="form-control" maxlength="50" value="{{ $record->concern }}"/>
                </div>
                 <div class="form-group">
                    <label>Medicine / Note</label>
                    <input name="note" type="text" class="form-control" maxlength="20" value="{{ $record->notes }}"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection