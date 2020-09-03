@extends('layouts.app', [
    'title' => __('Pemohonan Terbitkan Sepanduk'),
    'parentSection' => 'laravel',
    'elementName' => 'req-publish'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Pemohonan Terbitkan Sepanduk') }} 
            @endslot

            <li class="breadcrumb-item text-dark"><a href="{{ route('reqbanner.index') }}" class="text-dark">{{ __('Pemohonan Terbitkan Sepanduk') }}</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">{{ __('Senarai') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0 text-dark">{{ __('Pemohonan Terbitkan Sepanduk Senarai') }}</h3>
                                <p class="text-sm mb-0">
                                    <!-- {{ __('This is an example of item management. This is a minimal setup in order to get started fast.') }} -->
                                </p>
                            </div>
                            @if (auth()->user()->can('create', App\Item::class))
                                <div class="col-4 text-right">
                                    <a href="{{ route('program.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah Pemohonan') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-12 mt-2">
                        @include('alerts.success')
                        @include('alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('No') }}</th>
                                    <th scope="col">{{ __('Jenis Pemohonan') }}</th>
                                    <th scope="col">{{ __('Nama Pemohonan') }}</th>
                                    <th scope="col">{{ __('Tajuk Berita') }}</th>
                                    <th scope="col">{{ __('Keterangan Berita')}}</th>
                                    <th scope="col">{{ __('Tarikh Mula') }}</th>
                                    <th scope="col">{{ __('Tarikh Tamat') }}</th>
                                    <th scope="col">{{ __('Tarikh Dicipta') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($reqbanner as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->req_type }}</td>
                                        <td>{{ $data->req_name }}</td>
                                        <td>{{ $data->news_name }}</td>
                                        <td>{{ $data->news_desc }}</td>
                                        <td>{{ $data->tarikh_mula }}</td>
                                        <td>{{ $data->tarikh_tamat }}</td>
                                        <td>{{ $data->created_at->format('d/m/Y') }}</td>
                                        <!-- <td>{{ $data->updated_at->format('d/m/Y') }}</td> -->
                                            <td>
                                                <a href="{{ route('program.edit', $data) }}" class="btn btn-success btn-sm">
                                                    <span class="btn-inner--text"><i class="fas fa-edit"></i></span>
                                                </a>
                                                {{-- <!-- @if (auth()->user()->can('delete', $program))
                                                    <form action="{{ route('program.destroy', $program) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this request?") }}') ? this.parentElement.submit() : ''">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                @endif --> --}}

                                                <a href="{{ route('program.destroy', $data->id) }}" class="btn btn-danger btn-sm">
                                                    <span class="btn-inner--text"><i class="fas fa-trash"></i>{{ $data->id }}</span>
                                                </a>
                                            </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@push('js')
    <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
@endpush