@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title mb-0 mt-1">{{ trans('cruds.permission.title_singular') }} {{ trans('global.list') }}
            </div>
            @can('permission_create')
                <a class="btn btn-primary float-right" href="{{ route('admin.permissions.create') }}">
                    <i class="fa-solid fa-plus mr-1"></i> {{ trans('global.add') }}
                    {{ trans('cruds.permission.title_singular') }}
                </a>
            @endcan
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Permission">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.permission.fields.title') }}
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
                ajax: "{{ route('admin.permissions.index') }}",
                columns: [{
                        data: 'title',
                        name: 'title'
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
            let table = $('.datatable-Permission').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
@endsection
