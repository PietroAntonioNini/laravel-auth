@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Benvenuto {{ Auth::user()->name }}</h1>  
        <a href="{{ route('projects.create') }}" class="btn btn-outline-primary">Aggiungi nuovo progetto</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">

        @foreach ($projects as $project)
        <div class="col">
            <div class="card text-bg-dark">
                <img src="..." class="card-img" alt="..." style="min-height: 200px;">
    
                <div class="card-img-overlay">
                  <h5 class="card-title">{{$project->name}}</h5>
                  <p class="card-text">{{$project->description}}</p>
                  <p class="card-text"><small>{{$project->technologies_used}}</small></p>

                  {{-- bottoni  --}}
                  <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary">Link GitHub</a>

                        <div class="d-flex">
                            <a href="#" class="btn btn-outline-warning btn-sm me-2">Modifica</a>

                            <form action="" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Elimina Progetto</button>
                            </form>
                        </div>

                  </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
<div>
@endsection