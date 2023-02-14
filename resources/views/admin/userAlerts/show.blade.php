@extends('layouts.admin')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h3 class="my-3"> {{ trans('global.show') }} User Alert</h3>
            <div class="mb-1">
                <a href="{{ route('admin.user-alerts.index') }}" class="text-muted link"><i
                        class="fa-solid fa-arrow-left-long mr-1 "></i>
                    {{ trans('global.go_to') }} User Alerts
                    {{ trans('global.list') }}</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $userAlert->alert_text }}
        </div>

        <div class="card-body">
            {!! ($userAlert->alert_content) ? $userAlert->alert_content : '<p class="text-muted text-center">No Content Available</p>' !!}
        </div>
    </div>
@endsection
