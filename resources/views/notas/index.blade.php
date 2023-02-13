@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col">
            <h1>POST-IT</h1>
        </div>
    </div>
    <div class="col">
        <a class="btn-flotante" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar nota</a>
    </div>
    <div class="row">
        @foreach ($notas as $index => $nota)
            <form action="{{ route('nota.destroy', $nota) }}" id="onDelete" hidden method="POST">
                @method('DELETE') @csrf
            </form>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $nota->title }}</h5>
                        <p class="card-text">{{ $nota->content }}</p>
                        <a href="#" onclick="onDelete()" class="card-link">Borrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @extends('notas.modal')
@endsection
