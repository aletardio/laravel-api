@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Aggiungi un nuovo progetto</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-3">
                        <label for="title" class="control-label">Titolo:</label>
                        <input type="text" name="title" id="title" placeholder="Titolo"
                            class="form-control @error('title') is-invalid @enderror" required value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="link" class="control-label">Link:</label>
                        <input type="text" name="link" id="link" placeholder="Link"
                            class="form-control @error('link') is-invalid @enderror" required value="{{ old('link') }}">
                        @error('link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="cover_image" class="control-label">Immagine di copertina:</label>
                        <input type="file" name="cover_image" id="cover_image" placeholder="Immagine"
                            class="form-control @error('cover_image') is-invalid @enderror"
                            value="{{ old('cover_image') }}">
                        @error('cover_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="type_id" class="control-label">Seleziona tipo</label>
                        <select name="type_id" id="type_id" class="form-select @error('type_id') is-invalid @enderror">
                            <option value="">Seleziona tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="technology_id" class="control-label">Seleziona tecnologia</label>
                        <div>
                            @foreach ($technologies as $technology)
                                <input type="checkbox" name="technologies[]" id="technology-{{ $technology->id }}"
                                    class="form-check-input" value="{{ $technology->id }}" @checked(is_array(old('technologies')) && in_array($technology->id, old('technologies')))>
                                <label for="" class="form-check-label">{{ $technology->name }}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label for="description" class="control-label">Descrizione:</label>
                        <textarea name="description" id="description" cols="100" rows="10" placeholder="Descrizione"
                            class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
