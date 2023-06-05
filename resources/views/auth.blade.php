@include('components.header')

<div class="contianer-fluid mt-4">
    <div class="column d-flex justify-content-center">
        <div class="w-25">
            <img src="https://www.pngall.com/wp-content/uploads/5/Vector-Checklist-PNG.png" alt="..."
                class="img-thumbnail">
            <h1 class="fs-bold mt-4 mb-2">ToDo <mark>List</mark></h1>
            <form class="form-floating" method="POST" action="/auth">
                @csrf
                <div class="form-floating">
                    <input type="text"
                        class="form-control @error('name')
                is-invalid
            @enderror"
                        id="floatingInputInvalid" placeholder="examples" name="name">
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
        </div>
    </div>
