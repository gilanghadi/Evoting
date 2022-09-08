@extends('layouts.app')
@section('title', 'Home | Gamvote')

@section('content')
    {{-- @can('user') --}}
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- @if (auth()->user()->voting == 'false') --}}
                <div class="row justify-content-md-center">
                    @foreach ($calons as $c)
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-center fw-bold">
                                    {{ $c->nama_ketua }} & {{ $c->nama_wakil }}
                                </div>
                                <img src="{{ url('/foto_calon/' . $c->foto_calon) }}" class="card-img-top" alt="kandidate">

                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- @endif --}}
                {{-- @if (auth()->user()->voting == 'true')
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Anda Sudah Melakukan Voting</h4>
                        <p>Jika anda merasa belum melakukan voting, silahkan hubungin panitia.</p>
                    </div>
                @endif --}}
            </div>
        </div>

    </div>
    {{-- @endcan --}}
@endsection


{{-- <div class="card-body p-0">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingVisi{{ $c->id }}">
                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                    type="button" data-bs-toggle="collapse"
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
                <div class="accordion-body text-black-50">
                    {{ $c->visi }}
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingMisi{{ $c->id }}">
                <button class="accordion-button collapsed" style="box-shadow: 0 0 0 0rem "
                    type="button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse{{ $c->id }}"
                    aria-expanded="false"
                    aria-controls="flush-collapse{{ $c->id }}">
                    Misi
                </button>
            </h2>
            <div id="flush-collapse{{ $c->id }}" class="accordion-collapse collapse"
                aria-labelledby="flush-headingMisi{{ $c->id }}"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body text-black-50">
                    {{ $c->misi }}
                </div>
            </div>
        </div>
    </div>
    <a href="/vote/{{ $c->id }}" class="d-grid gap-2 p-3">
        <button class="btn btn-primary">Vote</button>
    </a>
</div> --}}
