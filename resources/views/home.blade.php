@extends('master')
@section('title')
Welcome | BITM
@endsection
@section('body')
<div class="container mt-4">
        <div class="row">
            @foreach ($courses as $course )
                <div class="col-md-4 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="{{$course['image_url']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    {{$course['title']}}
                                </h5>
                                <p class="card-text text-dark-emphasis">{{$course['description']}}</p>
                                <div class="d-flex">
                                    <p class="card-text me-2"><small class="text-muted">Duration: {{$course['duration']}} </small></p> |
                                    <p class="card-text ms-2"><small class="text-muted">Total Class: {{$course['no_classes']}}</small></p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text">BDT {{$course['price']}} </p>
                                    <p class=" card-text"><a href="{{route('details',['id'=>$course['id']])}}">Enroll Now</a></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </div>
@endsection
