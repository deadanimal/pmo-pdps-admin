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
            <li class="breadcrumb-item active text-dark" aria-current="page">{{ __('Edit') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Tag Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('program.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('program.update', $program->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Tag information') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $program->name) }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('teras') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Teras') }}</label>
                                    <input type="text" name="teras" id="input-name" class="form-control{{ $errors->has('Teras') ? ' is-invalid' : '' }}" placeholder="{{ __('Teras') }}" value="{{ old('teras', $program->teras) }}" required>

                                    @include('alerts.feedback', ['field' => 'teras'])
                                </div>

                                <div class="form-group{{ $errors->has('kump_sasaran') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kumpulan Sasaran') }}</label>
                                    <input type="text" name="kump_sasaran" id="input-name" class="form-control{{ $errors->has('Kumpulan Sasaran') ? ' is-invalid' : '' }}" placeholder="{{ __('Kumpulan Sasaran') }}" value="{{ old('kump_sasaran', $program->kump_sasaran) }}" required>

                                    @include('alerts.feedback', ['field' => 'kump_sasaran'])
                                </div>

                                <div class="form-group{{ $errors->has('kategori') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kategori') }}</label>
                                    <input type="text" name="kategori" id="input-name" class="form-control{{ $errors->has('Kategori') ? ' is-invalid' : '' }}" placeholder="{{ __('kump_sasaran') }}" value="{{ old('kump_sasaran', $program->kump_sasaran) }}" required>

                                    @include('alerts.feedback', ['field' => 'kategori'])
                                </div>

                                <div class="form-group{{ $errors->has('sub_kategori') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Sub Kategori') }}</label>
                                    <input type="text" name="sub_kategori" id="input-name" class="form-control{{ $errors->has('Sub Kategori') ? ' is-invalid' : '' }}" placeholder="{{ __('Sub Kategori') }}" value="{{ old('sub_kategori', $program->sub_kategori) }}" required>

                                    @include('alerts.feedback', ['field' => 'sub_kategori'])
                                </div>

                                <div class="form-group{{ $errors->has('tarikh_mula') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tarikh Mula') }}</label>
                                    <input type="date" name="tarikh_mula" id="input-name" class="form-control{{ $errors->has('Tarikh Mula') ? ' is-invalid' : '' }}" placeholder="{{ __('Tarikh Mula') }}" value="{{ old('tarikh_mula', $program->tarikh_mula) }}" required>

                                    @include('alerts.feedback', ['field' => 'tarikh_mula'])
                                </div>

                                <div class="form-group{{ $errors->has('tarikh_tamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tarikh Tamat') }}</label>
                                    <input type="date" name="tarikh_tamat" id="input-name" class="form-control{{ $errors->has('Tarikh Tamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Tarikh Tamat') }}" value="{{ old('tarikh_tamat', $program->tarikh_tamat) }}" required>

                                    @include('alerts.feedback', ['field' => 'tarikh_tamat'])
                                </div>

                                <div class="form-group{{ $errors->has('obj_program') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Objektif Program') }}</label>
                                    <input type="text" name="obj_program" id="input-name" class="form-control{{ $errors->has('Objektif Program') ? ' is-invalid' : '' }}" placeholder="{{ __('Objecktif Program') }}" value="{{ old('obj_program', $program->obj_program) }}" required>

                                    @include('alerts.feedback', ['field' => 'obj_program'])
                                </div>

                                <div class="form-group{{ $errors->has('manfaat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Manfaat') }}</label>
                                    <input type="text" name="manfaat" id="input-name" class="form-control{{ $errors->has('Manfaat') ? ' is-invalid' : '' }}" placeholder="{{ __('Manfaat') }}" value="{{ old('manfaat', $program->manfaat) }}" required>

                                    @include('alerts.feedback', ['field' => 'manfaat'])
                                </div>

                                <div class="form-group{{ $errors->has('kos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kos') }}</label>
                                    <input type="text" name="kos" id="input-name" class="form-control{{ $errors->has('Kos') ? ' is-invalid' : '' }}" placeholder="{{ __('Kos') }}" value="{{ old('kos', $program->kos) }}" required>

                                    @include('alerts.feedback', ['field' => 'kos'])
                                </div>

                                <div class="form-group{{ $errors->has('kekerapan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kekerapan') }}</label>
                                    <input type="text" name="kekerapan" id="input-name" class="form-control{{ $errors->has('Kekerapan') ? ' is-invalid' : '' }}" placeholder="{{ __('Kekerapan') }}" value="{{ old('kekerapan', $program->kekerapan) }}" required>

                                    @include('alerts.feedback', ['field' => 'kekerapan'])
                                </div>

                                <div class="form-group{{ $errors->has('status_pelaksanaan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('status_pelaksanaan') }}</label>
                                    <input type="text" name="status_pelaksanaan" id="input-name" class="form-control{{ $errors->has('Status Pelaksanaan') ? ' is-invalid' : '' }}" placeholder="{{ __('status_pelaksanaan') }}" value="{{ old('status_pelaksanaan', $program->status_pelaksanaan) }}" required>

                                    @include('alerts.feedback', ['field' => 'status_pelaksanaan'])
                                </div>

                                <div class="form-group{{ $errors->has('tidak_aktif') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tidak Aktif') }}</label>
                                    <input type="text" name="tidak_aktif" id="input-name" class="form-control{{ $errors->has('Sebab Tidak Aktif') ? ' is-invalid' : '' }}" placeholder="{{ __('Sebab Tidak Aktif') }}" value="{{ old('tidak_aktif', $program->tidak_aktif) }}" required>

                                    @include('alerts.feedback', ['field' => 'tidak_aktif'])
                                </div>

                                <div class="form-group{{ $errors->has('syarat_program') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Syarat Program') }}</label>
                                    <input type="text" name="syarat_program" id="input-name" class="form-control{{ $errors->has('Syarat Program') ? ' is-invalid' : '' }}" placeholder="{{ __('Syarat Program') }}" value="{{ old('syarat_program', $program->syarat_program) }}" required>

                                    @include('alerts.feedback', ['field' => 'syarat_program'])
                                </div>

                                <div class="form-group{{ $errors->has('agensi_url') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Agensi URL') }}</label>
                                    <input type="text" name="agensi_url" id="input-name" class="form-control{{ $errors->has('Agensi URL') ? ' is-invalid' : '' }}" placeholder="{{ __('Agensi URL') }}" value="{{ old('agensi_url', $program->agensi_url) }}" required>

                                    @include('alerts.feedback', ['field' => 'agensi_url'])
                                </div>

                                <div class="form-group{{ $errors->has('program_logo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Program Logo') }}</label>
                                    <input type="file" name="program_logo" id="input-name" class="form-control{{ $errors->has('Program Logo') ? ' is-invalid' : '' }}" placeholder="{{ __('Program Logo') }}" value="{{ old('program_logo', $program->program_logo) }}" required>

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