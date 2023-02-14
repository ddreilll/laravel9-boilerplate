<!DOCTYPE html>
<html>

<head>
    <title>{{ trans('panel.site_title') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png ') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('favicon/favicon-32x32.png ') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png ') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest ') }}">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-4.6.2/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="{{ asset('plugins/fontawesome-pro/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/fontawesome-pro/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    <style>
        .select2-container--default .select2-results__option--highlighted[aria-selected],
        .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
            background-color: #dee0e2;
            color: #000;
        }

        .select2-container .select2-selection--single {
            height: 37px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
        }

        .select2-container--default .select2-results__option[aria-disabled=true] .progress-bar {
            background-color: #84d296 !important;
        }

        .select2-container--default .select2-results__option[aria-disabled=true] .text-muted {
            color: #999 !important;
        }

        .select2 {
            width: 100% !important;
        }

        #notifModal .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #6c757d;
        }
    </style>
    @yield('styles')
</head>

<body class="sidebar-mini layout-fixed" style="height: auto;">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            @if (count(config('panel.available_languages', [])) > 1)
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach (config('panel.available_languages') as $langLocale => $langName)
                                <a class="dropdown-item"
                                    href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                                    ({{ $langName }})
                                </a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            @endif

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    @php
                        $unreadAlertsCount = \Auth::user()
                            ->userUserAlerts()
                            ->where('read', false)
                            ->count();
                    @endphp

                    <a href="#" class="nav-link" id="showNotifBtn">
                        <i class="fa-solid fa-bell"></i>
                        @if ($unreadAlertsCount > 0)
                            <span class="badge badge-warning navbar-badge">
                                {{ $unreadAlertsCount }}
                            </span>
                        @endif
                    </a>
                </li>

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <i class="fa-duotone fa-circle-user text-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                            @can('profile_password_edit')
                                <a class="dropdown-item" href="{{ route('profile.password.edit') }}">
                                    {{ trans('global.manage_account') }}
                                </a>
                            @endcan
                        @endif

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="fa-duotone fa-right-from-bracket mr-1 fa-sm fa-fw text-gray-400"></i>
                            <span>{{ trans('global.logout') }}</span>
                        </a>

                    </div>
                </li>
            </ul>
        </nav>

        @include('partials.menu')
        <div class="content-wrapper px-4 pb-5">

            <div class="content-header">
                @yield('content-header')
            </div>
            <!-- Main content -->
            <section class="content">
                @if (session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </section>
            <!-- /.content -->
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> {{ trans('panel.version') }}
            </div>
            <strong> &copy;</strong> {{ trans('panel.site_title') }}
        </footer>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>

    <div class="modal fade" id="notifModal" tabindex="-1" role="dialog" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title"><i class="fa-sharp fa-solid fa-bell-on mr-1"></i> System Alerts</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    @php
                        $alerts = \Auth::user()
                            ->userUserAlerts()
                            ->withPivot('read')
                            ->limit(10)
                            ->orderBy('created_at', 'ASC')
                            ->get()
                            ->reverse();
                    @endphp


                    <div class="card">
                        <div class="card-header p-2 bg-gray-light">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#unreadNotifTab"
                                        data-toggle="tab">Unread <span
                                            class=" elevation-1 ml-2 badge badge-light font-weight-normal text-md px-2">{{ $unreadAlertsCount }}</span></a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#allNotifTab" data-toggle="tab">All
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="unreadNotifTab">
                                    @php
                                        $unreadNotifCount = 0;
                                    @endphp

                                    @foreach ($alerts as $alert)
                                        @if ($alert->pivot->read === 0)
                                            <div
                                                class="card {{ $unreadNotifCount + 1 == 1 ? '' : 'collapsed-card' }}">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">
                                                        <a href="#" class="btn-link text-dark"
                                                            style="font-weight:500">{{ $alert->alert_text }}</a>
                                                    </h5>

                                                    <div class="card-tools">
                                                        <span class="text-muted">{{ $alert->created_at }}</span>
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i
                                                                class="fas {{ $unreadNotifCount + 1 == 1 ? 'fa-minus' : 'fa-plus' }}"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    {!! $alert->alert_content !!}
                                                </div>
                                            </div>

                                            @php
                                                $unreadNotifCount++;
                                            @endphp
                                        @endif
                                    @endforeach

                                    @if ($unreadNotifCount > 0)
                                        <hr class="mt-5">
                                        <p class="mb-0">
                                            <button class="btn btn-outline-dark btn-block" type="button"
                                                id="markAsReadBtn"><i class="fa-solid fa-envelope-open-text mr-1"></i>
                                                Mark all as
                                                read</button>
                                        </p>
                                    @else
                                        <p class="mb-0 text-center"> No available Alerts</p>
                                    @endif

                                </div>

                                <div class="tab-pane" id="allNotifTab">
                                    @php
                                        $allNotifCount = 0;
                                    @endphp

                                    @foreach ($alerts as $alert)
                                        @if ($alert->pivot->read === 1)
                                            <div class="card collapsed-card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">
                                                        <a href="#" class="btn-link text-dark"
                                                            style="font-weight:500">{{ $alert->alert_text }}</a>
                                                    </h5>

                                                    <div class="card-tools">
                                                        <span class="text-muted">{{ $alert->created_at }}</span>

                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    {!! $alert->alert_content !!}
                                                </div>
                                            </div>

                                            @php
                                                $allNotifCount++;
                                            @endphp
                                        @endif
                                    @endforeach

                                    @if ($allNotifCount <= 0)
                                        <p class="mb-0 text-center"> No available Alerts</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                order: [],
                pageLength: 10,
                dom: "<'row mb-4'<'col-sm-6'i>>" +
                    "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-6 mt-2'l><'col-sm-6'p>>",
                buttons: [{
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".notifications-menu").on('click', function() {
                if (!$(this).hasClass('open')) {
                    $('.notifications-menu .label-warning').hide();
                    $.get('/admin/user-alerts/read');
                }
            });

            $(".ajaxTable").on('draw', function() {
                $(this).find('.dropdown-toggle').dropdown();
            });

            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
            });

            @if ($unreadAlertsCount > 0)
                $("#notifModal").modal("show");
            @endif

            $("#showNotifBtn").on("click", function() {
                $("#notifModal").modal("show");
            });

            let readNotif = function() {

                let promise = $.ajax({
                    url: "{{ url('admin/user-alerts/read') }}",
                }).done(function(responseData, status, xhr) {}).fail(function(xhr, status, err) {});

                return promise;
            }

            $("#markAsReadBtn").on("click", function() {
                readNotif().done(function(response) {
                    location.reload();
                });
            });

            $('#summernote').summernote();
        });
    </script>
    <script>
        function trigger_btnIndicator(elementId, trigger) {
            var submitBtn = document.getElementById(elementId);

            if (trigger == "default") {
                $(submitBtn).find(".btn-loader").attr("hidden", true);
                $(submitBtn).find(".btn-label").attr("hidden", false);

                $(submitBtn).attr("disabled", false);
            } else if (trigger == "loading") {

                $(submitBtn).find(".btn-loader").attr("hidden", false);
                $(submitBtn).find(".btn-label").attr("hidden", true);

                $(submitBtn).attr("disabled", true);
            }
        }

        $("select").on("change", function() {
            if ($(this).val()) {
                $(this).valid();
            }
        });

        $("input[data-inputmask]").inputmask();

        const formatCurrency = function(amount) {
            return (amount * 1)
                .toLocaleString('en-US', {
                    style: 'currency',
                    currency: 'PHP',
                });
        };

        const formatThousand = function(number) {
            return (number * 1).toString()
                .replace(
                    /\B(?=(\d{3})+(?!\d))/g, ",")
        };

        const formatRating = function(number) {
            return Math.floor(number * 100) / 100.0;
        }
    </script>
    @yield('scripts')
</body>

</html>
