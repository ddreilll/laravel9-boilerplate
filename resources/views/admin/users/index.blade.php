@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title mb-0 mt-1">{{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}</div>
            @can('user_create')
                <a class="btn btn-primary float-right" href="{{ route('admin.users.create') }}">
                    <i class="fa-solid fa-plus mr-1"></i> {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
                </a>
            @endcan
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.two_factor') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.users.index') }}",
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'email_verified_at',
                        name: 'email_verified_at'
                    },
                    {
                        data: 'two_factor',
                        name: 'two_factor'
                    },
                    {
                        data: 'roles',
                        name: 'roles.title'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [0, 'desc']
                ],
                pageLength: 100,
            };
            let table = $('.datatable-User').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
