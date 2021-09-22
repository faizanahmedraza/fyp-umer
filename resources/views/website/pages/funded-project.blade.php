@extends('website.layouts.master')

@push('styles')
    <link rel="stylesheet" href="/assets/vendors/datatable/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <!--Page Title-->
    <section class="page-title banner" style="background-image: url(/assets/website/images/background/page-title.jpg);">
        <div id="particles-js" class="particles-pattern">
            <canvas class="particles-js-canvas-el"></canvas>
        </div>
        <div class="container">
            <div class="content-box">
                <h1>Funded Projects</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>{{ $resultSet->title ?? '' }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- blog-page-section -->
    <section class="blog-page-section">
        <div class="container">
            <div class="table-responsive-sm">
                <table class="display table dataTable table-striped table-bordered">
                    <thead>
                    <tr>
                        <th data-priority="1">S.No.</th>
                        <th data-priority="3">Project Title</th>
                        <th data-priority="3">Principle Investigator</th>
                        <th data-priority="3">Funding Agency</th>
                        <th data-priority="3">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($projects) > 0)
                        @foreach ($projects as $key => $val)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ Str::words($val->getProposal->title,20) ?? '' }}</td>
                                <td>{{ $val->getProposal->principle_investigator ?? '' }}</td>
                                <td>{{ $val->getProposal->funding_agency ?? ''}}</td>
                                <td>{{ $val->getProposal->amount }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- blog-section end -->
@endsection

@push('scripts')
    <script src="/assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $('.table').DataTable({
                "bPaginate": false,
                "info": false,
            });
        });
    </script>
@endpush
