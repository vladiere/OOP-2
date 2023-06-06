@props(['todos'])


<x-card class="card text-center text-capitalize shadow mb-5 bg-body-tertiary rounded">
    <div class="card-header">
        {{ $todos->tag->tag }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $todos->title }}</h5>
        <p class="card-text">{{ $todos->description }}</p>
        <div class="row justify-content-center align-items-center">
            @if ($todos->status == 'pending')
                <div class="col-1">
                    <form action="{{ route('done-todo', ['todo' => $todos->id]) }}" class="m-2" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success mx-3"><i class="bi bi-check-circle"></i></button>
                    </form>
                </div>
            @endif
            <div class="col-1">
                <form action="{{ route('remove-todo', ['todo' => $todos->id]) }}" class="m-2" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
        Created - {{ $todos->created_at->diffForHumans() }}
    </div>
</x-card>
