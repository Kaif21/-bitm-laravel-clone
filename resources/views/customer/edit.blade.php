@extends('master')

@section('title')
    Customer edit
@endsection

@section('body')
    <div class="container my-5 border p-3 rounded bg-white-50 shadow-lg">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('customer.update',['id'=>$customer->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="bg-success text-dark">{{session('message')}}</p>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label" ">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name"
                            name="name" value="{{$customer->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email"
                            name="email" value="{{$customer->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="phone number"
                            name="mobile" value="{{$customer->mobile}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone</label>
                        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="phone number"
                            name="image">
                            <img src="{{asset($customer->image)}}" width="200px" alt="">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Address</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address" name="address" value="">{{$customer->address}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100" value="Update a  student">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
