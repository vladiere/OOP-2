<x-homelayout class="container">

    <form action="/add-todo" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text"
                        class="form-control @error('title')
                        is-invalid
                    @enderror"
                        name="title" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                    @error('title')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <textarea type="text"
                        class="form-control @error('description')
                        is-invalid
                    @enderror"
                        name="description" id="floatingPassword" placeholder="Password" style="height: 100px"></textarea>
                    <label for="floatingPassword">Descriptions</label>
                    @error('description')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text"
                        class="form-control @error('status')
                        is-invalid
                    @enderror"
                        name="status" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Status</label>
                    @error('status')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating">
                    <select class="form-select text-capitalize" id="floatingSelect"
                        aria-label="Floating label select example" name="tag_id">
                        @if (count($tags) == 0)
                            <option value="0">NO Tags Available</option>
                        @else
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                            @endforeach
                        @endif
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mt-2">
                <button type="submit" class="btn btn-info">Add</button>
            </div>
        </div>
    </form>
</x-homelayout>
