@extends('layouts.app', [
    'title' => __('Program'),
    'parentSection' => 'laravel',
    'elementName' => 'req-data'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Program') }} 
            @endslot

            <li class="breadcrumb-item text-dark"><a href="{{ route('program.index') }}" class="text-dark">{{ __('Program') }}</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">{{ __('Create') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Item Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('program.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" class="item-form" action="{{ route('program.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Item information') }}</h6> --}}
                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('teras') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Teras') }}</label>
                                    <input type="text" name="teras" class="form-control{{ $errors->has('Teras') ? ' is-invalid' : '' }}" placeholder="{{ __('Teras') }}" value="{{ old('teras') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'teras'])
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nama Program') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('Nama Program') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Program') }}" value="{{ old('name') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('kategori') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kumpulan Sasaran') }}</label>
                                    <input type="text" name="kump_sasaran" id="input-name" class="form-control{{ $errors->has('Kumpulan Sasaran') ? ' is-invalid' : '' }}" placeholder="{{ __('Kumpulan Sasaran') }}" value="{{ old('kump_sasaran') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'kump_sasaran'])
                                </div>

                                <div class="form-group{{ $errors->has('kategori') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kategori') }}</label>
                                    <input type="text" name="kategori" id="input-name" class="form-control{{ $errors->has('Kategori') ? ' is-invalid' : '' }}" placeholder="{{ __('Kategori') }}" value="{{ old('kategori') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'kategori'])
                                </div>

                                <div class="form-group{{ $errors->has('obj_program') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('sub_kategori') }}</label>
                                    <input type="text" name="sub_kategori" id="input-name" class="form-control{{ $errors->has('sub_kategori') ? ' is-invalid' : '' }}" placeholder="{{ __('sub_kategori') }}" value="{{ old('sub_kategori') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'sub_kategori'])
                                </div>

                                <div class="form-group{{ $errors->has('tarikh_mula') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Tarikh Mula') }}</label>
                                    <input type="date" name="tarikh_mula" class="form-control{{ $errors->has('tarikh_mula') ? ' is-invalid' : '' }}" placeholder="{{ __('Tarikh Mula') }}" value="{{ old('tarikh_mula') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'tarikh_mula'])
                                </div>

                                <div class="form-group{{ $errors->has('tarikh_tamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Tarikh Tamat') }}</label>
                                    <input type="date" name="tarikh_tamat" class="form-control{{ $errors->has('tarikh_tamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Tarikh Tamat') }}" value="{{ old('tarikh_tamat') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'tarikh_tamat'])
                                </div>

                                <div class="form-group{{ $errors->has('obj_program') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('obj_program') }}</label>
                                    <input type="text" name="obj_program" id="input-name" class="form-control{{ $errors->has('obj_program') ? ' is-invalid' : '' }}" placeholder="{{ __('obj_program') }}" value="{{ old('obj_program') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'obj_program'])
                                </div>

                                <div class="form-group{{ $errors->has('manfaat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('manfaat') }}</label>
                                    <input type="text" name="manfaat" id="input-name" class="form-control{{ $errors->has('manfaat') ? ' is-invalid' : '' }}" placeholder="{{ __('manfaat') }}" value="{{ old('manfaat') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'manfaat'])
                                </div>

                                <div class="form-group{{ $errors->has('kos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('kos') }}</label>
                                    <input type="text" name="kos" id="input-name" class="form-control{{ $errors->has('kos') ? ' is-invalid' : '' }}" placeholder="{{ __('kos') }}" value="{{ old('kos') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'kos'])
                                </div>

                                <div class="form-group{{ $errors->has('status_pelaksanaan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('kekerapan') }}</label>
                                    <input type="text" name="kekerapan" id="input-name" class="form-control{{ $errors->has('kekerapan') ? ' is-invalid' : '' }}" placeholder="{{ __('kekerapan') }}" value="{{ old('kekerapan') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'kekerapan'])
                                </div>

                                <div class="form-group{{ $errors->has('status_pelaksanaan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('status_pelaksanaan') }}</label>
                                    <input type="text" name="status_pelaksanaan" id="input-name" class="form-control{{ $errors->has('status_pelaksanaan') ? ' is-invalid' : '' }}" placeholder="{{ __('status_pelaksanaan') }}" value="{{ old('status_pelaksanaan') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'status_pelaksanaan'])
                                </div>

                                <div class="form-group{{ $errors->has('tidak_aktif') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('tidak_aktif') }}</label>
                                    <input type="text" name="tidak_aktif" id="input-name" class="form-control{{ $errors->has('tidak_aktif') ? ' is-invalid' : '' }}" placeholder="{{ __('tidak_aktif') }}" value="{{ old('tidak_aktif') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'tidak_aktif'])
                                </div>

                                <div class="form-group{{ $errors->has('syarat_program') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('syarat_program') }}</label>
                                    <input type="text" name="syarat_program" id="input-name" class="form-control{{ $errors->has('syarat_program') ? ' is-invalid' : '' }}" placeholder="{{ __('syarat_program') }}" value="{{ old('syarat_program') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'syarat_program'])
                                </div>

                                <div class="form-group{{ $errors->has('agensi_url') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('agensi_url') }}</label>
                                    <input type="text" name="agensi_url" id="input-name" class="form-control{{ $errors->has('agensi_url') ? ' is-invalid' : '' }}" placeholder="{{ __('agensi_url') }}" value="{{ old('agensi_url') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'agensi_url'])
                                </div>

                                <div class="form-group{{ $errors->has('program_logo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('program_logo') }}</label>
                                    <input type="file" name="program_logo" id="input-name" class="form-control{{ $errors->has('program_logo') ? ' is-invalid' : '' }}" placeholder="{{ __('program_logo') }}" value="{{ old('program_logo') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'program_logo'])
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
