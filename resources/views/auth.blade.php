<x-layout>
    <form class="form-floating" method="POST" action="/auth">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror"
                id="floatingInputInvalid" placeholder="examples">
            <label for="floatingInputInvalid">Name</label>
        </div>
        <div class="form-floating mb-3">
            @error('name')
                <span class="text-danger-emphasis">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</x-layout>
