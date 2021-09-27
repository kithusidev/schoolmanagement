@extends('students.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <a class="btn btn-primary"  href="{{route('students.index')}}">Back</a>
     </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong> Whoops!</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif
<form action="{{route('students.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>coarse</strong>
                <input type="text" name="coarse" class="form-control" placeholder="coarse">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fee</strong>
                <input type="text" name="fee" class="form-control" placeholders="fee">
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
   </div>
</div>
</form>
@endsection
