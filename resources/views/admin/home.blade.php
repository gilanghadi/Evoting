@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi-person-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-gray-600 font-semibold">Jumlah Pemilih</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jumlahPemilih }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi-person-check-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-gray-600 font-semibold">Sudah Memilih</h6>
                                    <h6 class="font-extrabold mb-0" id="sudahmemilih">{{ $sudahMemilih }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="card ">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-gray-600 font-semibold">Jumlah Kandidat</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalKandidat }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <h1 class="text-center text-primary mt-3">
                        Hasil Voting
                    </h1>
                    <div class="row mt-2 justify-content-center">
                        @foreach ($calons as $c)
                            <div class="col-sm-4">
                                <div class="card shadow-lg">
                                    <div class="card-header text-center fw-bold">
                                        {{ $c->nama_ketua }} & {{ $c->nama_wakil }}
                                    </div>
                                    <img src="{{ url('/foto_calon/' . $c->foto_calon) }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="mt-3" id="vote{{ $c->id }}">{{ $c->suara }} Suara</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">

            <div class="card">
                <div class="card-header">
                    <h4>Pemilih Terkini</h4>
                </div>

                @foreach ($pemilihTerkini as $pemilih)
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1 text-white">{{ $pemilih->user->nama }}</h5>
                                <h6 class=" mb-0 text-gray-600">{{ $pemilih->user->kelas }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="card pb-3">
                <div class="card-header">
                    <h4>Hasil Voting</h4>
                </div>
                {!! $chart->container() !!}
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}

@endsection
