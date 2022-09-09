@extends('layouts.admin')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->has('file'))
        <div class="alert alert-danger alert-dismissible show fade">
            {{ $errors->first('file') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section id="basic-vertical-layouts">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Masukan Data Pemilih</h4>
                <div>
                    <button data-bs-toggle="modal" data-bs-target="#importExcel" class="btn btn-primary">IMPORT
                        EXCEL</button>
                    <a href="{{ route('admin.downloadTemplate') }}" class="btn icon icon-left btn-success"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Dowload Template</a>
                </div>
                <!-- Import Excel -->
                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aaria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="{{ route('admin.importPemilih') }}" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">

                                    {{ csrf_field() }}

                                    <label>Pilih file excel</label>
                                    <div class="form-group">
                                        <input type="file" name="file" required="required" class="form-control">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-ketua">{{ __('Nama') }}</label>
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama-wakil">{{ __('Nis') }}</label>
                                        <input id="nis" type="text"
                                            class="form-control @error('nis') is-invalid @enderror" name="nis"
                                            value="{{ old('nis') }}" required autocomplete="nis">

                                        @error('nis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto-calon">{{ __('Kelas') }}</label>
                                        <select class="form-select" name="kelas">
                                            <option value="X PMSR">X PMSR</option>
                                            <option value="X MPLB">X MPLB</option>
                                            <option value="X AKL">X AKL</option>
                                            <option value="X DKV1">X DKV1</option>
                                            <option value="X DKV2">X DKV2</option>
                                            <option value="X PPLG1">X PPLG1</option>
                                            <option value="X PPLG2">X PPLG2</option>
                                            <option value="XI PMSR">XI PMSR</option>
                                            <option value="XI MPLB">XI MPLB</option>
                                            <option value="XI AKL">XI AKL</option>
                                            <option value="XI DKV1">XI DKV1</option>
                                            <option value="XI DKV2">XI DKV2</option>
                                            <option value="XI PPLG1">XI PPLG1</option>
                                            <option value="XI PPLG2">XI PPLG2</option>
                                            <option value="XII BDP">XII BDP</option>
                                            <option value="XII OTKP">XII OTKP</option>
                                            <option value="XII AKL">XII AKL</option>
                                            <option value="XII MM1">XII MM1</option>
                                            <option value="XII MM2">XII MM2</option>
                                            <option value="XII RPL1">XII RPL1</option>
                                            <option value="XII RPL2">XII RPL2</option>
                                        </select>
                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="visi">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            {{ __('Submit') }}
                                        </button>

                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1"
                                            required>Reset</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
