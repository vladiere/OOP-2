@include('components.header')


<div class="container text-center">
    <div class="mt-5 d-flex justify-content-center">
        <a class="btn btn-primary rounded-3 text-white fs-5 p-2 me-3" title="Logout" href="/home"><i
                class="bi bi-house"></i>
            Home</a>
        <a class="btn btn-success rounded-3 text-white fs-5 p-2 me-3" title="Logout" href="/add-todos"><i
                class="bi bi-plus-circle-fill"></i> Add Todos</a>
        <a class="btn btn-success rounded-3 text-white fs-5 p-2 me-3" title="Logout" href="/add-tags"><i
                class="bi bi-bookmark-plus"></i> Add Custom Tags</a>
        <a class="btn btn-secondary rounded-3 text-white fs-5 p-2 me-3" title="Logout" href="{{ route('logout') }}"><i
                class="bi bi-box-arrow-right"></i> Logout</a>
    </div>
</div>


<hr class="mt-5">

<div class="container">
    {{ $slot }}
</div>
