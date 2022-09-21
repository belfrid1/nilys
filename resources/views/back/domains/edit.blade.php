@extends("layouts.base")

@section("app_main")
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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">List of domains</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Domains</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                        <!--message error begin-->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!-- <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">New Arrivals</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                            </h3> -->

                            <div class="card-toolbar">
                                <a href="{{route('domain.index')}}" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                    <!--end::Svg Icon-->
                                    New Domain
                                </a>
                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Content-->
                                <div class="flex-row-fluid py-lg-5 px-lg-15">
                                    <!--begin::Form-->
                                    <form class="form" enctype='multipart/form-data'  id="" method="post" action="{{route('domain.update', $domain->id)}}">
                                        @csrf
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Domain Name</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify  unique Domain name"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" value="{{ $domain->name ?? ''}}" class="form-control" id="validationCustom01" name="name" placeholder="domaineName.com" required>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span >API KEY</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" value="{{ $domain->apikey ?? '' }}" readonly class="form-control"  name="apikey"  >
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button  class="btn btn-lg btn-primary" type="submit">
                                                    <span class="indicator-label">Edit
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>

                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
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
        @include('layouts.footer')
    </div>
    <!--end:::Main-->



@endsection


@section('javascripts')
    <script type="text/javascript">
        @if(Session::has('error'))
        toastr.error('<b> {{ Session::get('error') }} !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });
        @endif

        @if(Session::has('success'))
        toastr.success('<b> {{ Session::get('success') }} !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });
        @endif

    </script>

@endsection
