@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase">{{ $technology->name }}</h3>
                <p class="my-2">{{ $technology->slug }}</p>
                <div class="row">
                    @forelse ($technology->projects as $project)
                        <div class="col-12 col-md-3">
                            <div class="card">
                                @if ($project->cover_image)
                                    <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                                        class="w-100">
                                @endif
                                <div class="card-body">
                                    <h4>{{ $project->title }}</h4>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <h3>Non ci sono progetti per questa tecnologia</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
