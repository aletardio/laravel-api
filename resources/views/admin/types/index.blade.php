@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                        TYPES
                    </h2>
                    <div>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Aggiungi tipo</a>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Slug</th>
                                <th>Projects count</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->slug }}</td>
                                    <td>{{ count($type->projects) }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.types.show', ['type' => $type->id]) }}"
                                                title="Visualizza progetto" class="btn btn-sm btn-square btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-square btn-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modal_type_delete-{{ $type->id }}" data-type="types"
                                                data-title="{{ $type->title }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            @include('admin.projects.partials.modal_type_delete')
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
