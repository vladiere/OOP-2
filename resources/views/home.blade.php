<x-homelayout class="container">
    @if (session('success'))
        <div class="row justify-content-center align-items-center text-center" style="width:20% !important;">
            <span class="d-2 alert alert-success">{{ session('success') }}</span>
        </div>
    @endif

    @if (count($todos) == 0)
        <div class="row justify-content-center align-items-center">
            <div class="col-4 text-secondary-emphasis">
                <span class="fs-1 m-5">Empty List...</span>
                <img src="https://www.svgrepo.com/show/505679/list-left.svg" class="m-0" style="width: 80%">
            </div>
        </div>
    @endif
    <div class="container-fluid">
        @foreach ($todos as $todo)
            <x-todos-card :todos="$todo" />
        @endforeach
    </div>


</x-homelayout>
