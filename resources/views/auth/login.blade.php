@extends('layouts.auth')

@section('title', 'Login | Gamvote')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="mb-4 mb-lg-0 col-12 d-flex justify-content-center col-lg-6">
                <img src="{{ asset('assets/images/voting.svg') }}" alt="vote" width="500" class="pe-4">
            </div>
            <div class="col-10 col-lg-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="nis" type="number"
                            class="form-control form-control-xl @error('nis') is-invalid @enderror" name="nis"
                            value="{{ old('nis') }}" required autocomplete="nis" autofocus placeholder="nis | nip">
                        @error('nis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password" type="password"
                            class="form-control form-control-xl @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password" placeholder="Password">
                        <i class="bi-eye-slash position-absolute top-0 end-0 py-2 pe-3 fs-4" id="toggle"
                            style="cursor: pointer"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">

                        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
            </div>
        </div>
    </div>

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
