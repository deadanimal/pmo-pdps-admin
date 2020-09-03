@extends('layouts.app', [
    'title' => __('Pemohonan Data'),
    'parentSection' => 'laravel',
    'elementName' => 'req-data'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Pemohonan Data') }} 
            @endslot

            <li class="breadcrumb-item text-dark"><a href="{{ route('item.index') }}" class="text-dark">{{ __('Pemohonan Data') }}</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">{{ __('Tambah') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Tambah Pemohonan Data') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('orgdata.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" class="item-form" action="{{ route('orgdata.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Item information') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('subject') }}</label>
                                    <input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="{{ __('subject') }}" value="{{ old('subject') }}" required autofocus />
                                    @include('alerts.feedback', ['field' => 'subject'])
                                </div>

                                <div class="form-group{{ $errors->has('requested_to') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('requested_to') }}</label>
                                    <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required autofocus />
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>

                                <div class="form-group{{ $errors->has('requested_to') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Pemohonan Kepada') }}</label>
                                    <input type="text" name="requested_to" class="form-control{{ $errors->has('requested_to') ? ' is-invalid' : '' }}" placeholder="{{ __('Pemohonan Kepada') }}" value="{{ old('requested_to') }}" required autofocus />
                                    @include('alerts.feedback', ['field' => 'requested_to'])
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/quill/dist/quill.core.css">
@endpush

@push('js')
    <script src="{{ asset('argon') }}/vendor/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/quill/dist/quill.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('argon') }}/js/items.js"></script>
@endpush
