@extends('layouts.base')

@section('app_main')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">List
                            of contacts</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Contact</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                        <!--message error begin-->
                        {{-- @if ($errors->any()) --}}
                        {{-- <div class="alert alert-danger"> --}}
                        {{-- <ul> --}}
                        {{-- @foreach ($errors->all() as $error) --}}
                        {{-- <li>{{ $error }}</li> --}}
                        {{-- @endforeach --}}
                        {{-- </ul> --}}
                        {{-- </div> --}}
                        {{-- @endif --}}
                        <!--message error end -->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Tables Widget 11-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive pt-4">
                                <!--begin::Table-->
                                <table id="table_contacts" class="table gy-5 gs-7 border rounded align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 rounded-start">Prénom</th>
                                            <th>Email</th>
                                            <th>Group guid</th>
                                            <th>Domain names</th>
                                            <th>Url</th>
                                            <th>Création date</th>
                                            <th>Modification date</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>Nomde</td>
                                            <td>Pre ré pa</td>
                                            <td>EZ</td>
                                            <td>Faxe</td>
                                            <td>https://www.jdsdk.com</td>
                                            <td>2202/33/23</td>
                                            <td>2202/33/23</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 11-->

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        @include('layouts.footer')
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
@endsection

@section('stylesheets')
    <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet"
        type="text/css" />
@endsection


@section('javascripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_contacts').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'csv',
                    text: '↓ Expot to csv',
                    className: 'btn btn-sm btn-light-success'
                }]
            });
        });
    </script>
@endsection
