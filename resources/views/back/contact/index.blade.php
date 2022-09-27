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
                                            <th>Création date</th>
                                            <th>Modification date</th>
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
                                                <td>{{ $contact->created_at }}</td>
                                                <td>{{ $contact->updated_at }}</td>
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


    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_newsletter" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered  col-lg-6 offset-lg-3" id="newsletter-bbloc442">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!-- Line progress -->
                <div class="progress-bar">
                    <div class="progress-bar-value"></div>
                </div>
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid">
                        <!--begin::Aside-->
                        <div class="w-100 ">
                            <!--begin::Nav-->
                            <form method="GET" action="#">
                                <h2>Newsletter</h2>
                                <p>Want to get updates to your mailbox? 📬 <br>Subscribe to our newsletter!</p>
                                <p class="statut-reponse">Message de retour test</p>
                                <input name="kknewsletter442-name" id="kknewsletter442-name" type="text" required
                                    placeholder="Your name" />
                                <input name="kknewsletter442-email" id="kknewsletter442-email" type="email" required
                                    placeholder="Your email address" class="email" />
                                <button class="submit">Subscribe</button>
                                <span class="newsletter-close">x</span>
                            </form>
                            <!--end::Nav-->
                        </div>
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
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

    <!-- src="" -->
    <script src="https://kidevs.xyz/nilys/v1/kknewsletter.min.js" id="kknewsletter442" data-api-domain="Localhost"
        data-api-url="http://localhost/public/contact/create" data-popup-guid="EZRET-UDJ24354-TRGF"
        data-popup-group-guid="XXX-GROUP23-234434"></script>
@endsection
