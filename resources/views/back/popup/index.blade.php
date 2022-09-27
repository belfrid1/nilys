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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">List of popups</h1>
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
                        <li class="breadcrumb-item text-muted">Popup</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--message error begin-->
                    {{-- @if ($errors->any())--}}
                    {{-- <div class="alert alert-danger">--}}
                    {{-- <ul>--}}
                    {{-- @foreach ($errors->all() as $error)--}}
                    {{-- <li>{{ $error }}</li>--}}
                    {{-- @endforeach--}}
                    {{-- </ul>--}}
                    {{-- </div>--}}
                    {{-- @endif--}}
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

                            <a href="{{route("popup.create")}}" class="btn btn-sm btn-light-primary"  data-toggle="tooltip" data-placement="top" title="Add new Popup">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                New Popup
                            </a>

                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="table_popup" class="table gy-5 gs-7 border rounded align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 min-w-325px rounded-start">Popup Name</th>
                                        <th class="min-w-125px">Enable (Yes/No)</th>
                                        <th class="min-w-125px">Group Name </th>
                                        <th class="min-w-125px">Default (Yes/No)</th>
                                        <th class="min-w-150px text-center">Actions</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach($popups as $popup)
                                    <tr>
                                        <td>
                                            <div class="">
                                                <span class="text-dark fw-bold mb-1 mx-2">{{ $popup->name }}</span>
                                                <span class="ml-2">
{{--                                                    <a href="{{ $popup->name }}" target="_blank" class="text-dark fw-bold text-hover-primary mb-1 fs-6" data-toggle="tooltip" data-placement="top" title="open">--}}
{{--                                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-09-15-053640/core/html/src/media/icons/duotune/arrows/arr036.svg-->--}}
{{--                                                        <span class="svg-icon svg-icon-muted svg-icon-2">--}}
{{--                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                <rect fill="currentColor" />--}}
{{--                                                                <path opacity="0.3" d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z" fill="currentColor" />--}}
{{--                                                                <path d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z" fill="currentColor" />--}}
{{--                                                                <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="currentColor" />--}}
{{--                                                            </svg>--}}
{{--                                                        </span>--}}
{{--                                                        <!--end::Svg Icon-->--}}
{{--                                                    </a>--}}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            @if($popup->enable )
                                                <span class="badge badge-light-success">Enable</span>
                                            @else
                                                <span class="badge badge-light-danger">Disable</span>
                                            @endif

                                        </td>
                                        <td >
                                           {{ $popup->popupgroup->name }}

                                        </td>
                                        <td>
                                            @if($popup->default )
                                                <span class="badge badge-light-success">Default - YES</span>
                                            @endif

                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route("popup.edit", $popup) }}" class="btn btn-icon btn-bg-light btn-active-color-warning  me-1" data-toggle="tooltip" data-placement="top" title="edit">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>

                                            <a href="{{ route('popup.delete',$popup->id) }}" class="btn btn-icon btn-bg-light btn-active-color-danger " data-toggle="tooltip" data-placement="top" title="delete" onclick="return confirm('Do you really want to remove this line?')">

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

                                            {{-- <form   class="btn btn-icon btn-bg-light btn-active-color-danger " method="POST" action="{{ route('domain.destroy', $domaine) }}" >--}}
                                            {{-- <!-- CSRF token -->--}}
                                            {{-- @csrf--}}
                                            {{-- <!-- <input type="hidden" name="_method" value="DELETE"> -->--}}
                                            {{-- @method("DELETE")--}}
                                            {{-- <input  class="btn btn-icon btn-bg-light btn-active-color-danger fa-vine"  type="submit" value="">--}}
                                            {{-- </form>--}}
                                            <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
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
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />



@endsection


@section('javascripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}


<script type="text/javascript"></script>
{{-- <script src="dist/clipboard.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
<script type="text/javascript">
    let Clipboard = new ClipboardJS('.clipboard-btn');
    Clipboard.on('success', function(e) {

        toastr.success('<b> copied !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });

        e.clearSelection();
    });

    @if(Session::has('error'))
    toastr.error('<b> {{ Session::get('
        error ') }} !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });
    @endif

    @if(Session::has('success'))
    toastr.success('<b> {{ Session::get('
        success ') }} !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });
    @endif
</script>
<script type="text/javascript">
    $("#table_popup").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });



    // $('#table_popup').dataTable({
    //     "pageLength": 1,
    //     "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Toutes']],
    //     "language": {
    //         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
    //     }
    // });
</script>
<script type="text/javascript">
    @if(count($errors) > 0)
    $('#kt_modal_create_app').modal('show');
    @endif
</script>
@endsection
