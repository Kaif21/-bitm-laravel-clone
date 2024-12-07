@extends('master')

@section('title')
    Create New Student
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('student.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="Another input placeholder" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="formGroupExampleInput3"
                            placeholder="Another input placeholder" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Address</label>
                        <div class="form-floating">
                            <textarea  name="address" class="form-control" placeholder="Another input placeholder" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2"></label>
                            {{-- <input type="text" class="form-control" id="formGroupExampleInput4"
                            placeholder="Another input placeholder" name="address"> --}}
                          </div>

                    </div>
                    <button type="submit" class="btn btn-success" value="Create a new student">Create new studnet</button>
                </form>
            </div>
        </div>
    </div>
@endsection
