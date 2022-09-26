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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Popup</h1>
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
                                             45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z"/></svg>
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
                                    <form class="form" enctype='multipart/form-data'  id="" method="post" action="{{route('popup.update',$popup->id)}}">
                                        @csrf
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Popup Name</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify  unique Popup name"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" value="{{ $popup->name ?? ''}}" class="form-control form-control-solid ps-12" id="" name="name" placeholder="" required>
                                                    <!--end::Input-->
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
                                                    <textarea id="content_id"  name="popup_content" class="form-control form-control-solid ps-12" rows="10" data-kt-element="input" placeholder="Type a popup content"> {{ $popup->popup_content ?? ''}}</textarea>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->


                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-semibold mb-2">Popup Group</label>
                                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a popup group" name="popop_group" required>
                                                            <option value="">Select popup group...</option>
                                                            @foreach($popupgroups as $popupgroup)
                                                                <option value="{{$popupgroup->id}}" @if($popupgroup->id === $popup->popupgroup_id) selected @endif>{{$popupgroup->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->

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
                                                            <input class="form-check-input" type="checkbox" name="default" @if($popup->default)  checked="checked" @endif />
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
                                                            <input class="form-check-input" name="enable" type="checkbox" @if($popup->enable)  checked="checked" @endif  />
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
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button class="btn btn-lg btn-primary" type="submit">
                                                <span class="indicator-label">
                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-09-15-053640/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                    <span class="svg-icon svg-icon-2x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor" />
                                                            <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor" />
                                                            <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    Edit
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
    <script src="{{ asset('assets/plugins/custom/ckeditor4/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'content_id', {
            height: 600,
            filebrowserImageBrowseUrl: '/file-manager?type=Images',
            filebrowserImageUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
            filebrowserBrowseUrl: '/file-manager?type=Files',
            filebrowserUploadUrl: '/file-manager/upload?type=Files&_token={{ csrf_token() }}'
        } );
        CKEDITOR.replace( 'desc_en', {
            height: 600,
            filebrowserImageBrowseUrl: '/file-manager?type=Images',
            filebrowserImageUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
            filebrowserBrowseUrl: '/file-manager?type=Files',
            filebrowserUploadUrl: '/file-manager/upload?type=Files&_token={{ csrf_token() }}'
        } );

    </script>
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
