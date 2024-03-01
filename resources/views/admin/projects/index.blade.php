@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                        PROJECTS
                    </h2>
                    <div>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Aggiungi progetto</a>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titolo</th>
                                <th>Categoria</th>
                                <th>Slug</th>
                                <th>Descrizione</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->type != null ? $project->type->name : 'Senza tipo' }}</td>
                                    <td>{{ $project->slug }}</td>
                                    <td>{{ Str::limit($project->description, 20, '...') }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                                title="Visualizza progetto" class="btn btn-sm btn-square btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                                title="Modifica progetto" class="btn btn-sm btn-square btn-warning me-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- <form class="me-2" title="Elimina progetto"
                                                action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                                method="POST"
                                                onsubmit="return confirm ('Sei sicuro di voler cancellare questo progetto?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-square btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form> --}}
                                            <button type="submit" class="btn btn-sm btn-square btn-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modal_post_delete-{{ $project->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            @include('admin.projects.partials.modal_delete')
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
