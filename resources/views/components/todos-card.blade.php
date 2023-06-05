@props(['todos'])


<x-card class="card text-center text-capitalize shadow mb-5 bg-body-tertiary rounded">
    <div class="card-header">
        {{ $todos->tag->tag }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $todos->title }}</h5>
        <p class="card-text">{{ $todos->description }}</p>
        <a href="#" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
        <a href="#" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
    </div>
    <div class="card-footer text-body-secondary">
        Created - {{ $todos->created_at->diffForHumans() }}
    </div>
</x-card>
