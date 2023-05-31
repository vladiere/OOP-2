<x-homelayout>
    <form action="" method="POST">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="title" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="description" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Descriptions</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="status" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Status</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="0">NO Tags Available</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
            </div>
        </div>
    </form>
</x-homelayout>
