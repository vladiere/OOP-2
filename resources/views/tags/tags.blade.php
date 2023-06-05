<x-homelayout class="container">
    @if (session('success'))
        <div class="row justify-content-center align-items-center text-center">
            <span class="d-2 alert alert-success">{{ session('success') }}</span>
        </div>
    @elseif (session('error'))
        <div class="row justify-content-center align-items-center text-center">
            <span class="d-2 alert alert-danger">{{ session('error') }}</span>
        </div>
    @endif
    <form action="/add-tags" method="POST" class="container-fluid">
        @csrf

        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" value="{{ old('tag') }}"
                        class="form-control @error('tag')
                        is-invalid
                    @enderror"
                        name="tag" id="floatingInput" placeholder="name@example.com" value="{{ old('tag') }}">
                    <label for="floatingInput">Tag Name</label>
                    @error('tag')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" value="{{ old('description') }}"
                        class="form-control @error('description')
                        is-invalid
                    @enderror"
                        name="description" id="floatingPassword" placeholder="Description"
                        value="{{ old('description') }}">
                    <label for="floatingPassword">Tag Description</label>
                    @error('description')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Add Tag</button>
            </div>
        </div>
    </form>
</x-homelayout>
