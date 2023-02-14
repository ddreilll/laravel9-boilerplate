<div class="text-center">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="actiondropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Action
        </button>
        <div class="dropdown-menu" aria-labelledby="actiondropdown">
            @can($viewGate)
                <a class="dropdown-item" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
                    {{ trans('global.view') }}
                </a>
            @endcan

            @can($editGate)
                <a class="dropdown-item" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can($deleteGate)
                <div class="dropdown-divider"></div>
                <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST"
                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="dropdown-item bg-danger" type="submit"
                        value="{{ trans('global.delete') }}">{{ trans('global.delete') }}</button>
                </form>
            @endcan
        </div>
    </div>
</div>
