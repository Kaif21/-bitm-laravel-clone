@extends('master')

@section('title')
    All Student list
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-success table-striped-columns">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($students as $student)
                    <tr>



                        <td>{{$loop->iteration}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>{{$student->address}}</td>
                        <td>
                            <a href="{{route('student.edit',['id'=>$student->id])}}"  class="btn btn-success btn-sm">Edit</a>
                            <a href="{{route('student.destroy',['id'=>$student->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to destroy this students data completely forever')">remove</a>
                        </td>

                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
