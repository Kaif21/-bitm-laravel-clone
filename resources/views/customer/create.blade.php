@extends('master')

@section('title')
    Customer Create
@endsection

@section('body')
    <div class="container my-5 border p-3 rounded bg-white-50 shadow-lg">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="bg-success text-dark">{{session('message')}}</p>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="phone number"
                            name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone</label>
                        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="phone number"
                            name="image">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Address</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address" name="address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
