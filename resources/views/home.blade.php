@extends('layouts.app')

@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (!auth()->user()->voting)
                    <div class="row justify-content-md-center">
                        @foreach ($calons as $c)
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header text-center fw-bold">
                                        {{ $c->nama_ketua }} & {{ $c->nama_wakil }}
                                    </div>
                                    <img src="{{ url('/foto_calon/' . $c->foto_calon) }}" class="card-img-top" alt="...">
                                    <div class="card-body p-0">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingVisi{{ $c->id }}">
                                                    <button class="accordion-button collapsed"
                                                        style="box-shadow: 0 0 0 0rem " type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseVisi{{ $c->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseVisi{{ $c->id }}">
                                                        Visi
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseVisi{{ $c->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingVisi{{ $c->id }}"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{ $c->visi }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingMisi{{ $c->id }}">
                                                    <button class="accordion-button collapsed"
                                                        style="box-shadow: 0 0 0 0rem " type="button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapse{{ $c->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapse{{ $c->id }}">
                                                        Misi
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse{{ $c->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingMisi{{ $c->id }}"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{ $c->misi }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/vote/{{ $c->id }}" class="d-grid gap-2 p-3">
                                            <button class="btn text-white" style="background-color:#435EBE;">Vote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if (auth()->user()->voting)
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Anda Sudah Melakukan Voting</h4>
                        <p>Jika anda merasa belum melakukan voting, silahkan hubungin panitia.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


{{-- <style>
    ::-webkit-scrollbar {
        display: none;
    }
</style>
<div class="container">
    <div class="row d-flex mt-5">
        @foreach ($calons as $c)
            <div class="col d-flex justify-content-around">
                <div class="d-flex flex-column">
                    <div>
                        <img src="{{ url('/foto_calon/' . $c->foto_calon) }}" class="rounded" alt="" width="250">
                    </div>
                    <div class="d-flex justify-content-around mt-3">
                        <button class="btn p-2 col-6 text-white" style="background-color:#435EBE;" data-bs-toggle="modal"
                            data-bs-target="#modalSelesai" class="btn btn-warning"
                            onclick="getDataArsipModal( {{ $c }})">Visi & Misi</button>
                        <button class="btn p-2 col-5 text-white" style="background-color:#435EBE;">VOTE</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalSelesai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <form class="modal-content" action="/dashboard/parkir/finish" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="nama">{{ $c->nama_ketua }} & {{ $c->nama_wakil }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Visi</label>
                                <div class="d-flex flex-row align-items-center">
                                    <p>{{ $c->visi }}</p>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Misi</label>
                                <div class="d-flex flex-row align-items-center">
                                    <p>{{ $c->misi }}</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
