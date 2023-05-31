<x-homelayout>
    <form action="" method="POST" class="container-fluid">
        <div class="column justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="tag" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Tag Title</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="color" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Color</label>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-info">Add Tag</button>
            </div>
        </div>
    </form>
</x-homelayout>
