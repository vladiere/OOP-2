<x-homelayout class="container">
    @if (count($tags) == 0)
        <div class="row justify-content-center align-items-center fs-2 mt-5 pt-5 text-secondary">
            Empty Tags
        </div>
    @else
        {{-- {{ dd($tags) }} --}}
        <table class="table table-secondary text-capitalize">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th>Tag name</th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $i = 1;
                @endphp
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $tag->tag }}</td>
                        <td>{{ $tag->description }}</td>
                        <td>{{ $tag->created_at->diffForHumans() }}</td>
                        <td>
                            <form action="{{ route('remove-tag', ['tag' => $tag->id]) }}" class="m-0" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-black-emphasis fw-bold fs-3"
                                    style="border: none; background-color: transparent;"><i
                                        class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endif
</x-homelayout>
