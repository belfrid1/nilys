@extends("layouts.base")


@section("app_main")
<!--begin::Main-->
<form action="{{ route("domain.store") }}" enctype='multipart/form-data' method="post" id="form_config_store">
    @csrf
    <h3 class="page-title">
        <a href="{{ route('domain.list') }}"
           class="btn btn-xs grey-gallery btn-outline">Retour</a>
        <button type="submit" class="btn btn-xs green">Enregistrer</button>
    </h3>

    <div class="full-height-content ">
        <div class="full-height-content-body">
            <div class="portlet light bg-inverse">
                <div class="portlet-body">
                    <div class="portlet light bordered">
                        <div class="portlet-body">

                            @if ($errors->any())
                                <div class="alert alert-danger d-none" id="cvalerterror" role="alert">

                                    @if($errors->first('name') )
                                        <strong>{{ $errors->first('name') }}</strong><br>
                                    @endif
                                    @if($errors->first('desc') )
                                        <strong>{{ $errors->first('desc') }}</strong><br>
                                    @endif

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="form-body" style="margin-bottom: 0%;padding-bottom: 0%">
                                <div class="row">


                                    <div class=" col-md-6">
                                        <div class="form-group ">
                                            <label for=""> Nom </label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" autocomplete="off" required>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Description </label>
                                            <input type="text" name="apikey" value="{{ old('desc') }}" class="form-control" autocomplete="off" required>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!--end:::Main-->
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"> Add Domaine</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="domaines" class="text-muted text-hover-primary">Domaine</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Add</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
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
                    <div class="card-body py-3">
                        <!--begin::Table container-->

                        <!--begin::Container-->
							<div class="container">

								<!--begin::Form-->
                                <form class="mx-auto w-100 mw-600px pt-15 pb-10 g-3 needs-validation" novalidate method="post">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <div class="pb-7 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Add a new domaine</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">Champs with label * is require
                                        <!--end::Description-->
                                    </div>
                                    </div>
                                    <!--end::Heading-->
                                    <div class="row">
                                        <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label">Domaine Name *</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Domaine name" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label">Api Key</label>
                                        <input type="text" class="form-control" id="validationCustom02"  placeholder="Api key" required>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Save Domaine</button>
                                    </div>
                                    </div>
                                </form>
								<!--end::Form-->
							</div>
							<!--begin::Container-->

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
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2022&copy;</span>
                <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
<!--end:::Main-->
@endsection
