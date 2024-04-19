@extends('layouts.app')

@section('content')
<div class="container py-5">
    <form action="{{ route('projects.create') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Titolo:</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name') {{$message}} @enderror
        </div>
        <div class="form-group mb-3">
            <label for="description">Descrizione:</label>
            <textarea class="form-control @error('description') is-invalid  @enderror" id="description" name="description">{{old('description')}}</textarea>
            @error('description') {{$message}} @enderror
        </div>
        <div class="form-group mb-3">
            <label for="url_img">URL dell'immagine di copertina:</label>
            <input type="text" class="form-control" id="url_img" name="url_img" value="{{old('url_img')}}">
        </div>
        <div class="form-group mb-3">
            <label for="used_languages">Linguaggi usati:</label>
            <input type="text" class="form-control @error('used_languages') is-invalid  @enderror" id="used_languages" name="used_languages" value="{{old('used_languages')}}">
            @error('used_languages') {{$message}} @enderror
        </div>
        <div class="form-group mb-3">
            <label for="url_github">Link alla repo GitHub:</label>
            <input type="text" class="form-control @error('url_github') is-invalid  @enderror" id="url_github" name="url_github" value="{{old('url_github')}}">
            @error('url_github') {{$message}} @enderror
        </div>

        <button type="submit" class="btn btn-primary py-3 px-4">Salva</button>
    </form>
</div>
@endsection