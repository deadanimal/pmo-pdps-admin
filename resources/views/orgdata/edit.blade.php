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
            <li class="breadcrumb-item active text-dark" aria-current="page">{{ __('Ubah') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Ubah Pemohonan Data') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('orgdata.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('orgdata.update', $orgdata->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Tag information') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $orgdata->name) }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Subjek') }}</label>
                                    <input type="subject" name="subject" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('subject') }}" value="{{ old('subject', $orgdata->subject) }}" required>

                                    @include('alerts.feedback', ['field' => 'subject'])
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Sebab') }}</label>
                                    <input type="description" name="description" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Sebab') }}" value="{{ old('description', $orgdata->description) }}" required>

                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>

                                <div class="form-group{{ $errors->has('requested_to') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Pemohonan Kepada') }}</label>
                                    <input type="requested_to" name="requested_to" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Pemohonan Kepada') }}" value="{{ old('requested_to', $orgdata->requested_to) }}" required>

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