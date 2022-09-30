@section('links')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/default.min.css">
@endsection

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Popup Group</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route("home")}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Popup Group</li>
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
                            <a href="{{ route("groups.index")}}" class="btn btn-sm btn-light-primary">
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
                                List Popup Group
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
                                <form class="form" enctype='multipart/form-data' method="post" action="{{route('groups.update', [$group->slug, ] )}}">
                                    @csrf
                                    <!--begin::Step 1-->
                                    <div class="current row" data-kt-stepper-element="content">
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row  mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Popup Group Name</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your Popup Group name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->

                                                <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $group->name ?? ''}}" placeholder="Ex: Santé" required>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row  mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="">Popup Group Guid</span>
                                                    {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your Popup Group name"></i>--}}
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input col-lg-4 fw-semibold text-muted-->
                                                <label class="d-flex align-items-center fs-5 text-muted">
                                                    {{ $group->guid ?? ''}}
                                                </label>
                                                {{-- <input type="text" class="form-control" id="" name="guid" value="" placeholder="Guid" readonly required>--}}
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
                                                        <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-3 mb-md-0 fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">Script</h4>
                                                        <div class="">
                                                            <pre>
                                                                <code class="language-html html">
                                                                    <!-- Script css -->
                                                                    <link rel="stylesheet" href="https://kidevs.xyz/nilys/v1/kknewsletter.min.css" />

                                                                    <!-- Script js -->

                                                                    <script src="https://kidevs.xyz/nilys/v1/kknewsletter442.min.js" id="kknewsletter442" data-api-domain="Localhost" data-api-url="http://localhost/public/contact/create" data-popup-guid="EZRET-UDJ24354-TRGF" data-popup-group-guid="XXX-GROUP23-234434">
                                                                    </script>
                                                                </code>
                                                            </pre>
                                                            <!-- <textarea readonly name="" id="" cols="70" rows="10">

                                                            </textarea> -->
                                                        </div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
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

                                        </div>
                                        <!--bloc conditions begin-->
                                        <div class="col">
                                            <div class="d-flex justify-content-between">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="">Conditions</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select popup and add url filter to save a condition"></i>
                                                </label>
                                                <span id="add_condition_btn" class="btn btn-sm btn-primary mr-0">Add Condition</span>
                                            </div>
                                            <table id="MyTable" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Group popup</th>
                                                        <th scope="col">Url Filter</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--bloc conditions end-->
                                    </div>
                                    <!--end::Step 1-->


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


@if(Session::has('error'))
<script type="text/javascript">
    toastr.error(`<b> {{ session('error') }} !</b>`, {
        closeButton: true,
        positionClass: "toast-top-right",
        showDuration: 2000,
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
<script type="text/javascript">
    // Denotes total number of rows.
    var rowIdx = 0;

    // jQuery button click event to add a row.
    $('#add_condition_btn').on('click', function() {
        console.log('add condition');
        // Adding a row inside the tbody.
        $('#tbody').append(`<tr id="cond_row${++rowIdx}">
          <td>
            <select name="selects[]" onchange="handlePopup(this)" class="form-select" aria-label="Default select example">
                <option  selected>----Popups----</option>
                @foreach($popups as $popup)
                <option value="{{$popup->slug}}"> {{$popup->name}}</option>
                @endforeach

            </select>
          </td>
            <td>
                <div class="form-floating">
                    <textarea id="url_cond_text${rowIdx}" class="form-control url_cond_text" name="textareas[]"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                    <label for="floatingTextarea2">url</label>
                </div>
            </td>
           <td>
                <a href="#" id="condition_rm_btn" class="btn btn-icon btn-bg-light btn-active-color-danger " data-toggle="tooltip" data-placement="top" title="delete" onclick="return confirm('Do you really want to remove this line?')">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>

            </td>
           </tr>`);
    });


    $("#MyTable").on("click", "#condition_rm_btn", function() {
        $(this).closest("tr").remove();
    });

    $('.url_cond_text').on('change', function() {
        var dInput = this.value;
    });
</script>

@if(Session::has('error'))
<script type="text/javascript">
    toastr.error(`<b> {{ session('error') }} !</b>`, {
        closeButton: true,
        positionClass: "toast-top-right",
        showDuration: 2000,
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

<script type="text/javascript">
    function handlePopup() {
        console.log("jhgfdsdffg");
        const tbody = document.getElementById('tbody')
        const selects = tbody.getElementsByTagName('select')
        // const textareas = tbody.getElementsByTagName('textarea')
        // let conditions = [];
        // conditions
        let selectsValues = [];
        for (let i = 0; i < selects.length; i++) {
            selectsValues.push(selects[i].value);
        }
        for (let i = 0; i < selectsValues.length; i++) {
            let tmp = [...selectsValues];
            console.log("%%%%%%%%%%%% tmp %%%%%%%%%%%");
            console.log(tmp);
            console.log("%%%%%%%%%%%% tmpVal %%%%%%%%%%%");
            console.log("")
            let tmpVal = tmp.splice(i, 1);
            if (tmp.include(tmpVal)) {
                console.log("il y a deja ce popup");
                break;
            }
        }
        console.log("il n'y pas ce popup");
        // console.log(conditions);
    }
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
<script type="text/javascript">
    hljs.highlightAll();
    document.querySelectorAll("code").forEach(function(element) {
        element.innerHTML = element.innerHTML
            .replace(/&/g, "&amp;").replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    });
</script>
@endsection
