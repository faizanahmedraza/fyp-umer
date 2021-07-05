@extends('cms.layouts.master')

@section('content')
    <main>
        <div class="container-fluid site-width">
            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header  justify-content-between align-items-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">View User</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="/admin/manage-users" class="btn btn-primary float-right">← Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="first_name">First Name <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->first_name }}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="last_name">Last Name <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->last_name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Father Name </label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->father_name }}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email <span class="required-class">*</span></label>
                                                    <input type="email" class="form-control rounded"
                                                           value="{{ $user->email }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="cnic">CNIC </label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->cnic }}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="contact">Contact </label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->contact }}" readonly>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Department </label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->department }}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control rounded"
                                                           value="{{ $user->designation }}" readonly>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Gender</label>
                                                    <div class="input-group">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="form-check-input" type="radio"
                                                                    {{ $user->gender}} checked disabled>
                                                            <label class="form-check-label">Male</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Date of Birth</label>
                                                    <input type="text" class="form-control rounded" value="{{ $user->dob }}"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-2 role">
                                                <label>User Role <span class="required-class">*</span></label>
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="role" checked disabled>
                                                        <label class="custom-control-label checkbox-primary outline"
                                                               for="role" >{{ $userRole }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
@endsection