@extends("layouts.base")

@section("app_main")
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Settings</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
{{--                            <!--begin::Menu toggle-->--}}
{{--                            <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->--}}
{{--                                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">--}}
{{--                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />--}}
{{--                                    </svg>--}}
{{--                                </span>--}}
{{--                                <!--end::Svg Icon-->--}}
{{--                                Filter--}}
{{--                            </a>--}}
{{--                            <!--end::Menu toggle-->--}}
                            <!--begin::Menu 1-->
{{--                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_632223a1294a7">--}}
{{--                                <!--begin::Header-->--}}
{{--                                <div class="px-7 py-5">--}}
{{--                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>--}}
{{--                                </div>--}}
{{--                                <!--end::Header-->--}}
{{--                                <!--begin::Menu separator-->--}}
{{--                                <div class="separator border-gray-200"></div>--}}
{{--                                <!--end::Menu separator-->--}}
{{--                                <!--begin::Form-->--}}
{{--                                <div class="px-7 py-5">--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Status:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <div>--}}
{{--                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_632223a1294a7" data-allow-clear="true">--}}
{{--                                                <option></option>--}}
{{--                                                <option value="1">Approved</option>--}}
{{--                                                <option value="2">Pending</option>--}}
{{--                                                <option value="2">In Process</option>--}}
{{--                                                <option value="2">Rejected</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Member Type:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <!--begin::Options-->--}}
{{--                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="1" />--}}
{{--                                                <span class="form-check-label">Author</span>--}}
{{--                                            </label>--}}
{{--                                            <!--end::Options-->--}}
{{--                                            <!--begin::Options-->--}}
{{--                                            <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />--}}
{{--                                                <span class="form-check-label">Customer</span>--}}
{{--                                            </label>--}}
{{--                                            <!--end::Options-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Options-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Notifications:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Switch-->--}}
{{--                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />--}}
{{--                                            <label class="form-check-label">Enabled</label>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Switch-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Actions-->--}}
{{--                                    <div class="d-flex justify-content-end">--}}
{{--                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>--}}
{{--                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Actions-->--}}
{{--                                </div>--}}
{{--                                <!--end::Form-->--}}
{{--                            </div>--}}
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Primary button-->
{{--                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>--}}
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin:::Tabs-->
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-5 active" data-bs-toggle="tab" href="#general">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                                        <span class="svg-icon svg-icon-2 me-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor" />
														</svg>
													</span>
                                        <!--end::Svg Icon-->General</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#email">
                                        <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                                <span class="svg-icon svg-icon-2 me-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor" />
                                                        <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                <!--end::Svg Icon-->
                                            </span>
                                        E-mail
                                    </a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
                                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                        <span class="svg-icon svg-icon-2 me-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
                                                <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        API
                                    </a>
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->

                            <!--begin:::Tab content-->
                            <div class="tab-content card" id="myTabContent">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="general" role="tabpanel">
                                    <!--begin::Form-->
{{--                                    <form id="general_form" class="form" action="#">--}}
{{--                                        <!--begin::Heading-->--}}
{{--                                        <div class="row mb-7">--}}
{{--                                            <div class="col-md-9 offset-md-3">--}}
{{--                                                <h2>General Settings</h2>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Heading-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="row fv-row mb-7">--}}
{{--                                            <div class="col-md-3 text-md-end">--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                                                    <span class="required">Meta Title</span>--}}
{{--                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the title of the store for SEO."></i>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9">--}}
{{--                                                <!--begin::Input-->--}}
{{--                                                <input type="text" class="form-control form-control-solid" name="meta_title" value="" />--}}
{{--                                                <!--end::Input-->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="row fv-row mb-7">--}}
{{--                                            <div class="col-md-3 text-md-end">--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                                                    <span>Meta Tag Description</span>--}}
{{--                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the description of the store for SEO."></i>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9">--}}
{{--                                                <!--begin::Input-->--}}
{{--                                                <textarea class="form-control form-control-solid" name="meta_description"></textarea>--}}
{{--                                                <!--end::Input-->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="row fv-row mb-7">--}}
{{--                                            <div class="col-md-3 text-md-end">--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                                                    <span>Meta Keywords</span>--}}
{{--                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma."></i>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9">--}}
{{--                                                <!--begin::Input-->--}}
{{--                                                <input type="text" class="form-control form-control-solid" name="meta_keywords" value="" data-kt-ecommerce-settings-type="tagify" />--}}
{{--                                                <!--end::Input-->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="row fv-row mb-7">--}}
{{--                                            <div class="col-md-3 text-md-end">--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                                                    <span>Theme</span>--}}
{{--                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set theme style for the store."></i>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9">--}}
{{--                                                <div class="w-100">--}}
{{--                                                    <!--begin::Select2-->--}}
{{--                                                    <select class="form-select form-select-solid" name="theme" data-control="select2" data-hide-search="true" data-placeholder="Select a layout">--}}
{{--                                                        <option></option>--}}
{{--                                                        <option value="Default" selected="selected">Default</option>--}}
{{--                                                        <option value="Minimalist">Minimalist</option>--}}
{{--                                                        <option value="Dark">Dark</option>--}}
{{--                                                        <option value="High_Contrast">High Contrast</option>--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Select2-->--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="row fv-row mb-7">--}}
{{--                                            <div class="col-md-3 text-md-end">--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                                                    <span>Default Layout</span>--}}
{{--                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set default layout style for the store."></i>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9">--}}
{{--                                                <div class="w-100">--}}
{{--                                                    <!--begin::Select2-->--}}
{{--                                                    <select class="form-select form-select-solid" name="layout" data-control="select2" data-hide-search="true" data-placeholder="Select a layout">--}}
{{--                                                        <option></option>--}}
{{--                                                        <option value="Default" selected="selected">Default</option>--}}
{{--                                                        <option value="Electronics">Electronics</option>--}}
{{--                                                        <option value="Fashion">Fashion</option>--}}
{{--                                                        <option value="Home">Home</option>--}}
{{--                                                        <option value="Dining">Dining</option>--}}
{{--                                                        <option value="Interior">Interior</option>--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Select2-->--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Action buttons-->--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-md-9 offset-md-3">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <!--begin::Button-->--}}
{{--                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>--}}
{{--                                                    <!--end::Button-->--}}
{{--                                                    <!--begin::Button-->--}}
{{--                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">--}}
{{--                                                        <span class="indicator-label">Save</span>--}}
{{--                                                        <span class="indicator-progress">Please wait...--}}
{{--																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
{{--                                                    </button>--}}
{{--                                                    <!--end::Button-->--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Action buttons-->--}}
{{--                                    </form>--}}
                                    <!--end::Form-->
                                    Comming soon
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <!--begin::Content-->
                                <div class="tab-pane fade flex-start" id="email" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title fs-3 fw-bold">
                                                Compose Mail Subjet and Content
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Form-->
                                        <form id="general_form" class="form"  method="post"  action="{{route('edit.setting_mail',$setting_mail)}}">
                                            @csrf
                                            <!--begin::Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Row-->
                                                <div class="row mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-xl-3">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span class="required">Subject</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the mail subjet"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-xl-9 fv-row">
                                                        <input type="text" class="form-control form-control-solid" name="subject" value="{{ $setting_mail->subject ?? ''}}" />
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-xl-3">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span>Mail content</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the mail content."></i>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-xl-9 fv-row">
                                                        <textarea id="mail_content_id" class="form-control form-control-solid" name="mail_content" rows="10">{{ $setting_mail->content ?? ''}}</textarea>
                                                    </div>
                                                    <!--begin::Col-->
                                                </div>
                                                <!--end::Row-->

                                                <!--begin::Card title-->
                                                <div class="card-title fs-3 fw-bold">
                                                    Set Mail API credentials (Mailjet)
                                                </div>
                                                <!--end::Card title-->

                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span class="required">Api key </span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set mailjet API Key"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" name="apikey" value="{{ $setting_mail->apikey ?? ''}}" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span class="required">Api Secret </span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set Secret Key"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" name="secretkey" value="{{ $setting_mail->secretkey ?? ''}}" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->


                                                <!--begin::Card title-->
                                                <div class="card-title fs-3 fw-bold">
                                                    Set SMTP Parameters
                                                </div>
                                                <!--end::Card title-->

                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">Host</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the host"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" value="{{ $setting_mail->host ?? ''}}" class="form-control form-control-solid" id="" name="host" placeholder="">
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">port</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the port"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" value="{{ $setting_mail->port ?? ''}}" class="form-control form-control-solid" id="" name="port" placeholder="">
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->


                                                <!--begin::Input mail group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">MailJet Username</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the Mailjet Username"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="email" value="{{ $setting_mail->username ?? ''}}" class="form-control form-control-solid" id="" name="username" placeholder="">
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">Mailjet Password</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the Mailjet password"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="password" value="{{ $setting_mail->password ?? ''}}" class="form-control form-control-solid" id="" name="password" placeholder="">
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->


                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">From Address</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify from address "></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" value="{{ $setting_mail->from_address ?? ''}}" class="form-control form-control-solid" id="" name="from_address" placeholder="">
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card footer-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
{{--                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
                                                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
                                            </div>
                                            <!--end::Card footer-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Content-->
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title fs-3 fw-bold">
                                               Nilys API Setting
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Form-->
                                        <form id="general_form" class="form"   action="{{route('edit.setting_api')}}">
                                            <!--begin::Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Row-->
                                                <div class="row mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-xl-3">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mt-3">
                                                            <span class="required">Website Url </span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the website url to retrive by other website"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-xl-9 fv-row">
                                                        <input type="text" class="form-control form-control-solid" name="website_url" value="{{ $setting_api->website_url ?? ''}}" />
                                                    </div>
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card footer-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                {{--                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
                                                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
                                            </div>
                                            <!--end::Card footer-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->

                            </div>
                            <!--end:::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
@endsection

@section('javascripts')*
<script src="{{asset('assets/js/custom/apps/inbox/compose.js')}}"></script>

<script src="{{ asset('assets/plugins/custom/ckeditor4/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('mail_content_id', {
        height: 400,
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

