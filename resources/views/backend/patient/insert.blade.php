@extends('backend.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card border-top border-0 border-3 border-info">
                <form action="{{ Route('patient.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-info">Add Patient</h5>
                                <a href="{{ route('patient.view') }}" class="btn btn-info btn-sm fs-4 text-light ">
                                    +
                                </a>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Patient Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="patient_name"
                                        class="form-control @error('patient_name') is-invalid  @enderror"
                                        id="inputEnterYourName" value="{{ old('patient_name') }}"
                                        placeholder="Enter Patient Name">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="dr_id">
                                    @error('patient_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control  @error('mobile') is-invalid  @enderror"
                                        name="mobile" placeholder="Enter Patient Mobile">
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control  @error('email') is-invalid  @enderror"
                                        name="email" placeholder="Enter Patient Mobile Number">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  @error('address') is-invalid  @enderror"
                                        name="address" id="summernote" placeholder="Enter Patient Address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Add Patient</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
