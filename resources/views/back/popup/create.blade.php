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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Create Popup</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('home')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Popups</li>
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
                            <a href="{{route('popup.index')}}" class="btn btn-sm btn-light-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0
                                            73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0
                                             45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                List Popup
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
                                <form class="form" enctype='multipart/form-data' id="" method="post" action="{{route('popup.store')}}">
                                    @csrf
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">

                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Popup Name</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify  unique Popup name"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" value="{{ old('name') }}" class="form-control form-control-solid ps-12" id="" name="name" placeholder="" required>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-semibold mb-2">Popup Group</label>

                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a popup group" name="popup_group" required>
                                                        <option value="">Select popup group...</option>
                                                        @foreach($popupgroups as $popupgroup)
                                                        <option value="{{$popupgroup->id}}" @if(old('popup_group')==$popupgroup->id ) selected @endif>{{$popupgroup->name}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Input group-->


                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Popup Content</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="type  Popup content"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea id="content_id" name="popup_content" class="form-control form-control-solid ps-12" rows="10" data-kt-element="input" placeholder="Type a popup content" required>{{ old('popup_content') }}</textarea>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->



                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Email Subject</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify Email subject"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" value="{{ old('email_subject') }}" class="form-control form-control-solid ps-12" id="" name="email_subject" placeholder="Type a Email subject">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->

                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Email Content</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="type  Popup content"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea id="create_email_content_id" name="email_content" class="form-control form-control-solid ps-12" rows="10" data-kt-element="input" placeholder="Type a Email content" required> {{ old('email_content') }}</textarea>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->




                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="fs-6 fw-semibold">Default Popup</label>
                                                        <div class="fs-7 fw-semibold text-muted">Check to define the default popup of selected group</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input" type="checkbox" name="default" />
                                                        <span class="form-check-label fw-semibold text-muted">Checked</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="fs-6 fw-semibold">Enable (Yes/No)</label>
                                                        <div class="fs-7 fw-semibold text-muted">Enable this popup</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="enable" type="checkbox" @if(old('enable')===true) checked="checked" @endif />
                                                        <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack mb-5">

                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-end pt-10">
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button class="btn btn-lg btn-primary" type="submit">
                                                <span class="indicator-label">Save
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
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
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
<script src="{{ asset('assets/plugins/custom/ckeditor4/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content_id', {
        height: 400,
        filebrowserImageBrowseUrl: '/file-manager?type=Images',
        filebrowserImageUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
        filebrowserBrowseUrl: '/file-manager?type=Files',
        filebrowserUploadUrl: '/file-manager/upload?type=Files&_token={{ csrf_token() }}'
    });
</script>

<script>
    CKEDITOR.replace('create_email_content_id', {
        height: 300,
        filebrowserImageBrowseUrl: '/file-manager?type=Images',
        filebrowserImageUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
        filebrowserBrowseUrl: '/file-manager?type=Files',
        filebrowserUploadUrl: '/file-manager/upload?type=Files&_token={{ csrf_token() }}'
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

@endsection
