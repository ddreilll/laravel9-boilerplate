@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title mb-0 mt-1"> {{ trans('cruds.role.title_singular') }} {{ trans('global.list') }}</div>
            @can('role_create')
                <a class="btn btn-primary float-right" href="{{ route('admin.roles.create') }}">
                    <i class="fa-solid fa-plus mr-1"></i> {{ trans('global.add') }} {{ trans('cruds.role.title_singular') }}
                </a>
            @endcan
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Role">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.role.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.role.fields.permissions') }}
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
                ajax: "{{ route('admin.roles.index') }}",
                columns: [
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'permissions',
                        name: 'permissions.title'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [0, 'asc']
                ],
                pageLength: 100,
            };
            let table = $('.datatable-Role').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
