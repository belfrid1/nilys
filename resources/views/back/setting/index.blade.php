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

                                    <!--begin::Form-->
                                    <form id="general_form" class="form" action="{{route('edit.setting_mail',$setting_mail)}}">
                                        <!--begin::Heading-->
                                        <div class="row mb-7">
                                            <div class="col-md-9 offset-md-3">
                                                <h2>Compose Mail Subjet and Content</h2>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Subject</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the mail subjet"></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="mail_subject" value="{{ $setting_mail->subject ?? ''}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span>Mail content</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the mail content."></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <textarea id="mail_content_id" class="form-control form-control-solid" name="mail_content" rows="10">{{ $setting_mail->content ?? ''}}</textarea>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <div class="row mb-7">
                                            <div class="col-md-9 offset-md-3">
                                                <h2>Set Mail API credentials (Mailjet)</h2>
                                            </div>
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Api key </span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set mailjet API Key"></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="apikey" value="{{ $setting_mail->apikey ?? ''}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Api Secret </span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set Secret Key"></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="apisecret" value="{{ $setting_mail->apisecret ?? ''}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <div class="row mb-7">
                                            <div class="col-md-9 offset-md-3">
                                                <h2>Set SMTP Parameters</h2>
                                            </div>
                                        </div>
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
                                                <input type="text" value="{{ $setting_mail->host ?? ''}}" class="form-control form-control-solid ps-12" id="" name="host" placeholder="">
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
                                                <input type="text" value="{{ $setting_mail->port ?? ''}}" class="form-control form-control-solid ps-12" id="" name="port" placeholder="">
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
                                                    <span class="required">MailJet Username</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the Mailjet Username"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" value="{{ $setting_mail->username ?? ''}}" class="form-control form-control-solid ps-12" id="" name="username" placeholder="">
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
                                                <input type="password" value="{{ $setting_mail->password ?? ''}}" class="form-control form-control-solid ps-12" id="" name="password" placeholder="">
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
                                                <input type="text" value="{{ $setting_mail->from_address ?? ''}}" class="form-control form-control-solid ps-12" id="" name="from_address" placeholder="">
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->


                                        <!--begin::Action buttons-->
                                        <div class="d-flex flex-end pt-10">
                                            <div class="row py-5">
                                                <div class="col-md-9 offset-md-3">
                                                    <div class="d-flex">
                                                        <!--begin::Button-->
                                                        <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Save</span>
                                                            <span class="indicator-progress">Please wait...
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                                    <!--begin::Form-->
                                    <form id="kt_ecommerce_settings_general_localization" class="form" action="#">
                                        <!--begin::Heading-->
                                        <div class="row mb-7">
                                            <div class="col-md-9 offset-md-3">
                                                <h2>Localization Settings</h2>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Country</span>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Select2-->
                                                <select id="kt_ecommerce_localization_country" class="form-select form-select-solid" name="localization_country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                                    <option></option>
                                                    <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.html">Afghanistan</option>
                                                    <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.html">Aland Islands</option>
                                                    <option value="AL" data-kt-select2-country="assets/media/flags/albania.html">Albania</option>
                                                    <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.html">Algeria</option>
                                                    <option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.html">American Samoa</option>
                                                    <option value="AD" data-kt-select2-country="assets/media/flags/andorra.html">Andorra</option>
                                                    <option value="AO" data-kt-select2-country="assets/media/flags/angola.html">Angola</option>
                                                    <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.html">Anguilla</option>
                                                    <option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.html">Antigua and Barbuda</option>
                                                    <option value="AR" data-kt-select2-country="assets/media/flags/argentina.html">Argentina</option>
                                                    <option value="AM" data-kt-select2-country="assets/media/flags/armenia.html">Armenia</option>
                                                    <option value="AW" data-kt-select2-country="assets/media/flags/aruba.html">Aruba</option>
                                                    <option value="AU" data-kt-select2-country="assets/media/flags/australia.html">Australia</option>
                                                    <option value="AT" data-kt-select2-country="assets/media/flags/austria.html">Austria</option>
                                                    <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.html">Azerbaijan</option>
                                                    <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.html">Bahamas</option>
                                                    <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.html">Bahrain</option>
                                                    <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.html">Bangladesh</option>
                                                    <option value="BB" data-kt-select2-country="assets/media/flags/barbados.html">Barbados</option>
                                                    <option value="BY" data-kt-select2-country="assets/media/flags/belarus.html">Belarus</option>
                                                    <option value="BE" data-kt-select2-country="assets/media/flags/belgium.html">Belgium</option>
                                                    <option value="BZ" data-kt-select2-country="assets/media/flags/belize.html">Belize</option>
                                                    <option value="BJ" data-kt-select2-country="assets/media/flags/benin.html">Benin</option>
                                                    <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.html">Bermuda</option>
                                                    <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.html">Bhutan</option>
                                                    <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.html">Bolivia, Plurinational State of</option>
                                                    <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.html">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.html">Bosnia and Herzegovina</option>
                                                    <option value="BW" data-kt-select2-country="assets/media/flags/botswana.html">Botswana</option>
                                                    <option value="BR" data-kt-select2-country="assets/media/flags/brazil.html">Brazil</option>
                                                    <option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.html">British Indian Ocean Territory</option>
                                                    <option value="BN" data-kt-select2-country="assets/media/flags/brunei.html">Brunei Darussalam</option>
                                                    <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.html">Bulgaria</option>
                                                    <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.html">Burkina Faso</option>
                                                    <option value="BI" data-kt-select2-country="assets/media/flags/burundi.html">Burundi</option>
                                                    <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.html">Cambodia</option>
                                                    <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.html">Cameroon</option>
                                                    <option value="CA" data-kt-select2-country="assets/media/flags/canada.html">Canada</option>
                                                    <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.html">Cape Verde</option>
                                                    <option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.html">Cayman Islands</option>
                                                    <option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.html">Central African Republic</option>
                                                    <option value="TD" data-kt-select2-country="assets/media/flags/chad.html">Chad</option>
                                                    <option value="CL" data-kt-select2-country="assets/media/flags/chile.html">Chile</option>
                                                    <option value="CN" data-kt-select2-country="assets/media/flags/china.html">China</option>
                                                    <option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.html">Christmas Island</option>
                                                    <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.html">Cocos (Keeling) Islands</option>
                                                    <option value="CO" data-kt-select2-country="assets/media/flags/colombia.html">Colombia</option>
                                                    <option value="KM" data-kt-select2-country="assets/media/flags/comoros.html">Comoros</option>
                                                    <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.html">Cook Islands</option>
                                                    <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.html">Costa Rica</option>
                                                    <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.html">Côte d'Ivoire</option>
                                                    <option value="HR" data-kt-select2-country="assets/media/flags/croatia.html">Croatia</option>
                                                    <option value="CU" data-kt-select2-country="assets/media/flags/cuba.html">Cuba</option>
                                                    <option value="CW" data-kt-select2-country="assets/media/flags/curacao.html">Curaçao</option>
                                                    <option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.html">Czech Republic</option>
                                                    <option value="DK" data-kt-select2-country="assets/media/flags/denmark.html">Denmark</option>
                                                    <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.html">Djibouti</option>
                                                    <option value="DM" data-kt-select2-country="assets/media/flags/dominica.html">Dominica</option>
                                                    <option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.html">Dominican Republic</option>
                                                    <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.html">Ecuador</option>
                                                    <option value="EG" data-kt-select2-country="assets/media/flags/egypt.html">Egypt</option>
                                                    <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.html">El Salvador</option>
                                                    <option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.html">Equatorial Guinea</option>
                                                    <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.html">Eritrea</option>
                                                    <option value="EE" data-kt-select2-country="assets/media/flags/estonia.html">Estonia</option>
                                                    <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.html">Ethiopia</option>
                                                    <option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.html">Falkland Islands (Malvinas)</option>
                                                    <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.html">Fiji</option>
                                                    <option value="FI" data-kt-select2-country="assets/media/flags/finland.html">Finland</option>
                                                    <option value="FR" data-kt-select2-country="assets/media/flags/france.html">France</option>
                                                    <option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.html">French Polynesia</option>
                                                    <option value="GA" data-kt-select2-country="assets/media/flags/gabon.html">Gabon</option>
                                                    <option value="GM" data-kt-select2-country="assets/media/flags/gambia.html">Gambia</option>
                                                    <option value="GE" data-kt-select2-country="assets/media/flags/georgia.html">Georgia</option>
                                                    <option value="DE" data-kt-select2-country="assets/media/flags/germany.html">Germany</option>
                                                    <option value="GH" data-kt-select2-country="assets/media/flags/ghana.html">Ghana</option>
                                                    <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.html">Gibraltar</option>
                                                    <option value="GR" data-kt-select2-country="assets/media/flags/greece.html">Greece</option>
                                                    <option value="GL" data-kt-select2-country="assets/media/flags/greenland.html">Greenland</option>
                                                    <option value="GD" data-kt-select2-country="assets/media/flags/grenada.html">Grenada</option>
                                                    <option value="GU" data-kt-select2-country="assets/media/flags/guam.html">Guam</option>
                                                    <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.html">Guatemala</option>
                                                    <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.html">Guernsey</option>
                                                    <option value="GN" data-kt-select2-country="assets/media/flags/guinea.html">Guinea</option>
                                                    <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.html">Guinea-Bissau</option>
                                                    <option value="HT" data-kt-select2-country="assets/media/flags/haiti.html">Haiti</option>
                                                    <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.html">Holy See (Vatican City State)</option>
                                                    <option value="HN" data-kt-select2-country="assets/media/flags/honduras.html">Honduras</option>
                                                    <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.html">Hong Kong</option>
                                                    <option value="HU" data-kt-select2-country="assets/media/flags/hungary.html">Hungary</option>
                                                    <option value="IS" data-kt-select2-country="assets/media/flags/iceland.html">Iceland</option>
                                                    <option value="IN" data-kt-select2-country="assets/media/flags/india.html">India</option>
                                                    <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.html">Indonesia</option>
                                                    <option value="IR" data-kt-select2-country="assets/media/flags/iran.html">Iran, Islamic Republic of</option>
                                                    <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.html">Iraq</option>
                                                    <option value="IE" data-kt-select2-country="assets/media/flags/ireland.html">Ireland</option>
                                                    <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.html">Isle of Man</option>
                                                    <option value="IL" data-kt-select2-country="assets/media/flags/israel.html">Israel</option>
                                                    <option value="IT" data-kt-select2-country="assets/media/flags/italy.html">Italy</option>
                                                    <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.html">Jamaica</option>
                                                    <option value="JP" data-kt-select2-country="assets/media/flags/japan.html">Japan</option>
                                                    <option value="JE" data-kt-select2-country="assets/media/flags/jersey.html">Jersey</option>
                                                    <option value="JO" data-kt-select2-country="assets/media/flags/jordan.html">Jordan</option>
                                                    <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.html">Kazakhstan</option>
                                                    <option value="KE" data-kt-select2-country="assets/media/flags/kenya.html">Kenya</option>
                                                    <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.html">Kiribati</option>
                                                    <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.html">Korea, Democratic People's Republic of</option>
                                                    <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.html">Kuwait</option>
                                                    <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.html">Kyrgyzstan</option>
                                                    <option value="LA" data-kt-select2-country="assets/media/flags/laos.html">Lao People's Democratic Republic</option>
                                                    <option value="LV" data-kt-select2-country="assets/media/flags/latvia.html">Latvia</option>
                                                    <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.html">Lebanon</option>
                                                    <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.html">Lesotho</option>
                                                    <option value="LR" data-kt-select2-country="assets/media/flags/liberia.html">Liberia</option>
                                                    <option value="LY" data-kt-select2-country="assets/media/flags/libya.html">Libya</option>
                                                    <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.html">Liechtenstein</option>
                                                    <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.html">Lithuania</option>
                                                    <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.html">Luxembourg</option>
                                                    <option value="MO" data-kt-select2-country="assets/media/flags/macao.html">Macao</option>
                                                    <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.html">Madagascar</option>
                                                    <option value="MW" data-kt-select2-country="assets/media/flags/malawi.html">Malawi</option>
                                                    <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.html">Malaysia</option>
                                                    <option value="MV" data-kt-select2-country="assets/media/flags/maldives.html">Maldives</option>
                                                    <option value="ML" data-kt-select2-country="assets/media/flags/mali.html">Mali</option>
                                                    <option value="MT" data-kt-select2-country="assets/media/flags/malta.html">Malta</option>
                                                    <option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.html">Marshall Islands</option>
                                                    <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.html">Martinique</option>
                                                    <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.html">Mauritania</option>
                                                    <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.html">Mauritius</option>
                                                    <option value="MX" data-kt-select2-country="assets/media/flags/mexico.html">Mexico</option>
                                                    <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.html">Micronesia, Federated States of</option>
                                                    <option value="MD" data-kt-select2-country="assets/media/flags/moldova.html">Moldova, Republic of</option>
                                                    <option value="MC" data-kt-select2-country="assets/media/flags/monaco.html">Monaco</option>
                                                    <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.html">Mongolia</option>
                                                    <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.html">Montenegro</option>
                                                    <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.html">Montserrat</option>
                                                    <option value="MA" data-kt-select2-country="assets/media/flags/morocco.html">Morocco</option>
                                                    <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.html">Mozambique</option>
                                                    <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.html">Myanmar</option>
                                                    <option value="NA" data-kt-select2-country="assets/media/flags/namibia.html">Namibia</option>
                                                    <option value="NR" data-kt-select2-country="assets/media/flags/nauru.html">Nauru</option>
                                                    <option value="NP" data-kt-select2-country="assets/media/flags/nepal.html">Nepal</option>
                                                    <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.html">Netherlands</option>
                                                    <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.html">New Zealand</option>
                                                    <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.html">Nicaragua</option>
                                                    <option value="NE" data-kt-select2-country="assets/media/flags/niger.html">Niger</option>
                                                    <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.html">Nigeria</option>
                                                    <option value="NU" data-kt-select2-country="assets/media/flags/niue.html">Niue</option>
                                                    <option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.html">Norfolk Island</option>
                                                    <option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.html">Northern Mariana Islands</option>
                                                    <option value="NO" data-kt-select2-country="assets/media/flags/norway.html">Norway</option>
                                                    <option value="OM" data-kt-select2-country="assets/media/flags/oman.html">Oman</option>
                                                    <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.html">Pakistan</option>
                                                    <option value="PW" data-kt-select2-country="assets/media/flags/palau.html">Palau</option>
                                                    <option value="PS" data-kt-select2-country="assets/media/flags/palestine.html">Palestinian Territory, Occupied</option>
                                                    <option value="PA" data-kt-select2-country="assets/media/flags/panama.html">Panama</option>
                                                    <option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.html">Papua New Guinea</option>
                                                    <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.html">Paraguay</option>
                                                    <option value="PE" data-kt-select2-country="assets/media/flags/peru.html">Peru</option>
                                                    <option value="PH" data-kt-select2-country="assets/media/flags/philippines.html">Philippines</option>
                                                    <option value="PL" data-kt-select2-country="assets/media/flags/poland.html">Poland</option>
                                                    <option value="PT" data-kt-select2-country="assets/media/flags/portugal.html">Portugal</option>
                                                    <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.html">Puerto Rico</option>
                                                    <option value="QA" data-kt-select2-country="assets/media/flags/qatar.html">Qatar</option>
                                                    <option value="RO" data-kt-select2-country="assets/media/flags/romania.html">Romania</option>
                                                    <option value="RU" data-kt-select2-country="assets/media/flags/russia.html">Russian Federation</option>
                                                    <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.html">Rwanda</option>
                                                    <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.html">Saint Barthélemy</option>
                                                    <option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.html">Saint Kitts and Nevis</option>
                                                    <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.html">Saint Lucia</option>
                                                    <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.html">Saint Martin (French part)</option>
                                                    <option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.html">Saint Vincent and the Grenadines</option>
                                                    <option value="WS" data-kt-select2-country="assets/media/flags/samoa.html">Samoa</option>
                                                    <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.html">San Marino</option>
                                                    <option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.html">Sao Tome and Principe</option>
                                                    <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.html">Saudi Arabia</option>
                                                    <option value="SN" data-kt-select2-country="assets/media/flags/senegal.html">Senegal</option>
                                                    <option value="RS" data-kt-select2-country="assets/media/flags/serbia.html">Serbia</option>
                                                    <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.html">Seychelles</option>
                                                    <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.html">Sierra Leone</option>
                                                    <option value="SG" data-kt-select2-country="assets/media/flags/singapore.html">Singapore</option>
                                                    <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.html">Sint Maarten (Dutch part)</option>
                                                    <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.html">Slovakia</option>
                                                    <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.html">Slovenia</option>
                                                    <option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.html">Solomon Islands</option>
                                                    <option value="SO" data-kt-select2-country="assets/media/flags/somalia.html">Somalia</option>
                                                    <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.html">South Africa</option>
                                                    <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.html">South Korea</option>
                                                    <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.html">South Sudan</option>
                                                    <option value="ES" data-kt-select2-country="assets/media/flags/spain.html">Spain</option>
                                                    <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.html">Sri Lanka</option>
                                                    <option value="SD" data-kt-select2-country="assets/media/flags/sudan.html">Sudan</option>
                                                    <option value="SR" data-kt-select2-country="assets/media/flags/suriname.html">Suriname</option>
                                                    <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.html">Swaziland</option>
                                                    <option value="SE" data-kt-select2-country="assets/media/flags/sweden.html">Sweden</option>
                                                    <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.html">Switzerland</option>
                                                    <option value="SY" data-kt-select2-country="assets/media/flags/syria.html">Syrian Arab Republic</option>
                                                    <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.html">Taiwan, Province of China</option>
                                                    <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.html">Tajikistan</option>
                                                    <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.html">Tanzania, United Republic of</option>
                                                    <option value="TH" data-kt-select2-country="assets/media/flags/thailand.html">Thailand</option>
                                                    <option value="TG" data-kt-select2-country="assets/media/flags/togo.html">Togo</option>
                                                    <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.html">Tokelau</option>
                                                    <option value="TO" data-kt-select2-country="assets/media/flags/tonga.html">Tonga</option>
                                                    <option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.html">Trinidad and Tobago</option>
                                                    <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.html">Tunisia</option>
                                                    <option value="TR" data-kt-select2-country="assets/media/flags/turkey.html">Turkey</option>
                                                    <option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.html">Turkmenistan</option>
                                                    <option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.html">Turks and Caicos Islands</option>
                                                    <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.html">Tuvalu</option>
                                                    <option value="UG" data-kt-select2-country="assets/media/flags/uganda.html">Uganda</option>
                                                    <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.html">Ukraine</option>
                                                    <option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.html">United Arab Emirates</option>
                                                    <option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.html">United Kingdom</option>
                                                    <option value="US" data-kt-select2-country="assets/media/flags/united-states.html">United States</option>
                                                    <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.html">Uruguay</option>
                                                    <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.html">Uzbekistan</option>
                                                    <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.html">Vanuatu</option>
                                                    <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.html">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.html">Vietnam</option>
                                                    <option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.html">Virgin Islands</option>
                                                    <option value="YE" data-kt-select2-country="assets/media/flags/yemen.html">Yemen</option>
                                                    <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.html">Zambia</option>
                                                    <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.html">Zimbabwe</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Language</span>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" name="localization_language" data-control="select2" data-placeholder="Select a language">
                                                        <option></option>
                                                        <option value="id">Bahasa Indonesia - Indonesian</option>
                                                        <option value="msa">Bahasa Melayu - Malay</option>
                                                        <option value="ca">Català - Catalan</option>
                                                        <option value="cs">Čeština - Czech</option>
                                                        <option value="da">Dansk - Danish</option>
                                                        <option value="de">Deutsch - German</option>
                                                        <option value="en">English</option>
                                                        <option value="en-gb">English UK - British English</option>
                                                        <option value="es">Español - Spanish</option>
                                                        <option value="fil">Filipino</option>
                                                        <option value="fr">Français - French</option>
                                                        <option value="ga">Gaeilge - Irish (beta)</option>
                                                        <option value="gl">Galego - Galician (beta)</option>
                                                        <option value="hr">Hrvatski - Croatian</option>
                                                        <option value="it">Italiano - Italian</option>
                                                        <option value="hu">Magyar - Hungarian</option>
                                                        <option value="nl">Nederlands - Dutch</option>
                                                        <option value="no">Norsk - Norwegian</option>
                                                        <option value="pl">Polski - Polish</option>
                                                        <option value="pt">Português - Portuguese</option>
                                                        <option value="ro">Română - Romanian</option>
                                                        <option value="sk">Slovenčina - Slovak</option>
                                                        <option value="fi">Suomi - Finnish</option>
                                                        <option value="sv">Svenska - Swedish</option>
                                                        <option value="vi">Tiếng Việt - Vietnamese</option>
                                                        <option value="tr">Türkçe - Turkish</option>
                                                        <option value="el">Ελληνικά - Greek</option>
                                                        <option value="bg">Български език - Bulgarian</option>
                                                        <option value="ru">Русский - Russian</option>
                                                        <option value="sr">Српски - Serbian</option>
                                                        <option value="uk">Українська мова - Ukrainian</option>
                                                        <option value="he">עִבְרִית - Hebrew</option>
                                                        <option value="ur">اردو - Urdu (beta)</option>
                                                        <option value="ar">العربية - Arabic</option>
                                                        <option value="fa">فارسی - Persian</option>
                                                        <option value="mr">मराठी - Marathi</option>
                                                        <option value="hi">हिन्दी - Hindi</option>
                                                        <option value="bn">বাংলা - Bangla</option>
                                                        <option value="gu">ગુજરાતી - Gujarati</option>
                                                        <option value="ta">தமிழ் - Tamil</option>
                                                        <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                        <option value="th">ภาษาไทย - Thai</option>
                                                        <option value="ko">한국어 - Korean</option>
                                                        <option value="ja">日本語 - Japanese</option>
                                                        <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                        <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Currency</span>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a currency">
                                                        <option></option>
                                                        <option value="USD">US Dollar</option>
                                                        <option value="Euro">Euro</option>
                                                        <option value="Pound">Pound</option>
                                                        <option value="AUD">Australian Dollar</option>
                                                        <option value="JPY">Japanese Yen</option>
                                                        <option value="KRW">Korean Won</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span>Length Class</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the unit measurement for length."></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a length class">
                                                        <option></option>
                                                        <option value="cm" selected="selected">Centimeter</option>
                                                        <option value="mm">Milimeter</option>
                                                        <option value="in">Inch</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span>Weight Class</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the unit measurement for weight."></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a weight class">
                                                        <option></option>
                                                        <option value="kg" selected="selected">Kilogram</option>
                                                        <option value="g">Gram</option>
                                                        <option value="lb">Pound</option>
                                                        <option value="oz">Ounce</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Action buttons-->
                                        <div class="row py-5">
                                            <div class="col-md-9 offset-md-3">
                                                <div class="d-flex">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    </form>
                                    <!--end::Form-->
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

