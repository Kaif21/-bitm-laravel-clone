@extends('master')

@section('title')
    Customer Index
@endsection

@section('body')
    <div class="container my-5 border p-3 rounded bg-white-50 shadow-lg">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">image</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer )


                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->mobile}}</td>
                            <td><img src="{{asset($customer->image)}}" width="50px" alt="" srcset=""></td>
                            <td>{{$customer->address}}</td>
                            <td>
                                <a href="{{route('customer.edit',['id'=>$customer->id])}}" target="_blank" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{route('customer.destroy',['id'=>$customer->id])}}" target="_blank" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to destroy you customer info from Database?')">Destroy</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
