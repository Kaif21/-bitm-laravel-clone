@extends('master')

@section('title')
    Edit
     Student
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('student.update',['id'=>$student->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" value="{{$student->name}}"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2"
                            placeholder="Another input placeholder" value="{{$student->email}}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Phone number</label>
                        <input type="number" class="form-control" id="formGroupExampleInput3"
                            placeholder="Another input placeholder" value="{{$student->mobile}}" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Address</label>
                        <div class="form-floating">
                            <textarea  name="address" class="form-control" placeholder="Another input placeholder" id="floatingTextarea2" style="height: 100px">{{$student->address}}</textarea>
                            <label for="floatingTextarea2"></label>
                            {{-- <input type="text" class="form-control" id="formGroupExampleInput4"
                            placeholder="Another input placeholder" name="address"> --}}
                          </div>

                    </div>
                    <button type="submit" class="btn btn-success" value="Update a  student">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
