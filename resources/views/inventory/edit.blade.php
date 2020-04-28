@extends('layouts.adminmain')
@section('title', 'Edit Medicine Record')
@section('content')

<div class="container-fluid">

   @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
   @endif
    <form class="border border-light p-4" action="{{ route('inventory_update', $record->id) }}" method="POST">
        {{ csrf_field() }}
        <h1 class="text-center">Edit Medicine</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Generic Name</label>
                    <input name="gn" type="text" class="form-control" maxlength="50" value="{{ $record->generic_name }}" />
                </div>
                <div class="form-group">
                    <label>Brand Name</label>
                    <input name="bn" type="text" class="form-control" maxlength="50" value="{{ $record->brand_name }}"/>
                </div>
                <div class="form-group">
                    <label>Dosage</label>
                    <input name="dosage" type="text" class="form-control" maxlength="100" value="{{ $record->dose }}"/>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Description</label>
                    <input name="desc" type="text" class="form-control" maxlength="100" value="{{ $record->description }}"/>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input name="stock" type="text" class="form-control" maxlength="100" value="{{ $record->stock }}"/>
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