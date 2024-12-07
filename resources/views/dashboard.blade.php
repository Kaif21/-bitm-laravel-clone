@extends('master')
@section('title')
Assesment | BITM
@endsection
@section('body')
<!-- MAIN CONTENT -->
<form action="{{route('full-name')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="first_name">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="text" name="last_name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="text" value="{{session('message')}}" >
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 <!-- MAIN CONTENT -->
 @endsection
