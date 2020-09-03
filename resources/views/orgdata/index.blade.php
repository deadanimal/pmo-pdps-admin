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
                                <h3 class="mb-0">{{ __('Senarai Pemohonan Data') }}</h3>
                                <p class="text-sm mb-0">
                                    <!-- {{ __('This is an example of item management. This is a minimal setup in order to get started fast.') }} -->
                                </p>
                            </div>
                            @if (auth()->user()->can('create', App\Item::class))
                                <div class="col-4 text-right">
                                    <a href="{{ route('orgdata.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah Pemohonan Data') }}</a>
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
                                    <th scope="col">{{ __('Nama') }}</th>
                                    <th scope="col">{{ __('Pemohonan Dari') }}</th>
                                    <th scope="col">{{ __('Pemohonan Kepada') }}</th>
                                    <th scope="col">{{ __('Subject') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th scope="col">{{ __('Tarikh Dicipta') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($orgdata as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->requested_by }}</td>
                                        <td>{{ $data->requested_to }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->status }}</td>
                                        {{-- <td>{!! $data->description !!}</td> --}}
                                        <td>{{ $data->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('orgdata.edit', $data) }}" class="btn btn-success btn-sm">
                                                    <span class="btn-inner--text"><i class="fas fa-edit"></i></span>
                                                </a>
                                                <!-- @if (auth()->user()->can('delete', $orgdata))
                                                    <form action="{{ route('orgdata.destroy', $orgdata) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this request?") }}') ? this.parentElement.submit() : ''">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                @endif -->

                                                <a href="{{ route('orgdata.destroy', $data->id) }}" class="btn btn-danger btn-sm">
                                                    <span class="btn-inner--text"><i class="fas fa-trash"></i></span>
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