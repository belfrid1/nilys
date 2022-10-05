@extends('layouts.base')

@section('app_main')
    <link rel="stylesheet" href="https://kidevs.xyz/nilys/v1/kknewsletter.min.css" />
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
                                            <th>Status</th>
                                            <th>Création date</th>
                                            <th>Modification date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $contact->firstname }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->popupgroup_guid }}</td>
                                                <td>{{ $contact->domain }}</td>
                                                <td>{{ $contact->url }}</td>
                                                <td>
                                                    @if ($contact->status)
                                                        <span class="badge badge-light-success"> Sent</span>
                                                    @else
                                                        <span class="badge badge-light-danger"> Not sent</span>
                                                    @endif
                                                </td>
                                                <td>{{ $contact->created_at }}</td>
                                                <td>{{ $contact->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('contact.send_mail', $contact) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-warning  me-1"
                                                        data-toggle="tooltip" data-placement="top" title="Sent Mail">
                                                    <a href="{{ route("contact.send_mail", $contact->id) }}" class="btn btn-icon btn-bg-light btn-active-color-warning  me-1" data-toggle="tooltip" data-placement="top" title="Sent Mail">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                                            <span class="svg-icon svg-icon-2 me-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach

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
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}"
        rel="stylesheet" type="text/css" />
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

    @if(Session::has('error'))
        <script type="text/javascript">
            toastr.error(`<b> {{session('error') }} !</b>`, {
                closeButton: true,
                positionClass: "toast-top-right",
                showDuration: 1000,
                hideDuration: 10000000,
            });
        </script>
    @endif
    @if(Session::has('success'))

        <script type="text/javascript">
            toastr.success(`<b> {{ session('success') }} !</b>`, {
                closeButton: true,
                positionClass: "toast-top-right",
                showDuration: 1000,
                hideDuration: 10000000,
            });
        </script>
    @endif

    <!-- src="" -->
    <script src="https://kidevs.xyz/nilys/v1/kknewsletter442.min.js" id="kknewsletter442" data-api-domain="Localhost"
        data-api-url="http://localhost/public/contact/create" data-popup-guid="EZRET-UDJ24354-TRGF"
        data-popup-group-guid="XXX-GROUP23-234434">
    </script>


@endsection


