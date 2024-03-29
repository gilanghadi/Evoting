@extends('layouts.admin')


@section('title', 'Tambahkan Admin')


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
            <div class="card-header">
                <h4 class="card-title">Masukan Data Admin</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.addAdminPost') }}">
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
                                        <input id="nis" type="number"
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
                                        <label for="visi">{{ __('Password') }}</label>
                                        <div class="position-relative">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">
                                            <i class="bi-eye-slash position-absolute top-0 end-0 py-1 pe-3" id="toggle"
                                                style="cursor: pointer;"></i>
                                        </div>
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


    <script type="text/javascript">
        const password = document.querySelector('#password')
        const toggle = document.querySelector('#toggle')

        toggle.addEventListener('click', function() {
            const type = password.getAttribute('type')
            if (type === 'password') {
                password.setAttribute('type', 'text')
                toggle.classList.remove('bi-eye-slash')
                toggle.classList.add('bi-eye')
            } else {
                password.setAttribute('type', 'password')
                toggle.classList.remove('bi-eye')
                toggle.classList.add('bi-eye-slash')
            }
        })
    </script>
@endsection
