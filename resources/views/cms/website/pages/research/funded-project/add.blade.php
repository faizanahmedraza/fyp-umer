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
                                    <h4 class="card-title">Add Funded Project</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('website.page.research.funded-project') }}"
                                       class="btn btn-primary float-right">← Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="POST"
                                              action="{{ route('website.page.research.funded-project.add.data') }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show"
                                                     role="alert">
                                                    <strong>Error!</strong>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contact">Title <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           id="title" name="title" placeholder="Enter Title"
                                                           value="{{ old('title') }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cnic">Principle Investigator <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           id="principle_investigator" name="principle_investigator"
                                                           placeholder="Enter Principle Investigator"
                                                           value="{{ old('principle_investigator') }}">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label> Funding Agency <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           id="funding_agency" name="funding_agency"
                                                           placeholder="Enter Funding Agency"
                                                           value="{{ old('funding_agency') }}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label> Department <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           id="department" name="department"
                                                           placeholder="Enter Principle Investigator"
                                                           value="{{ old('department') }}">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label> Amount <span class="required-class">*</span></label>
                                                    <input type="text" class="form-control rounded"
                                                           id="amount" name="amount"
                                                           placeholder="Enter Amount"
                                                           value="{{ old('amount') }}">
                                                </div>
                                            </div>

                                            <div class="form-group mt-5">
                                                <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light float-right">
                                                    Save
                                                </button>
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