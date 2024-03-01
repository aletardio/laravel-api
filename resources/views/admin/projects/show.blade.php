@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase">{{ $project->title }}</h3>
                @if ($project->cover_image)
                    <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->title }}" class="w-50">
                @endif
                <h5 class="my-2">
                    <strong>{{ !empty($project->type->name) ? $project->type->name : 'Senza tipo' }}</strong>
                </h5>
                <p class="my-2">{{ $project->description }}</p>
                <p class="my-2">
                    @forelse ($project->technologies as $technology)
                        {{ $technology->name }}
                    @empty
                        Il progetto non ha tecnologie associate
                    @endforelse
                </p>
            </div>
        </div>
    </div>
@endsection
