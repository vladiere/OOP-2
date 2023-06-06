@include('components.header')


<div class="container text-center">
    <div class="mt-3 d-flex justify-content-center">
        <a class="btn rounded-3 text-black fs-5 p-2 me-3" title="Logout" href="/home"><i class="bi bi-house"></i>
            Home</a>
        <div class="dropdown-end">
            <span data-bs-toggle="dropdown" class="btn fs-1"><i class="bi bi-three-dots"></i></span>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item fs-5 p-2" title="Logout" href="/add-todos"><i class="bi bi-plus-circle"></i>
                        Add Todos</a>
                </li>
                <li>
                    <a class="dropdown-item fs-5 p-2" title="Logout" href="/add-tags"><i
                            class="bi bi-bookmark-plus"></i> Add
                        Custom Tags</a>
                </li>
                <li>
                    <a class="dropdown-item fs-5 p-2" href="{{ route('tags-list') }}"><i class="bi bi-nut"></i> Manage
                        Tags</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item fs-5 p-2" title="Logout" href="{{ route('logout') }}"><i
                            class="bi bi-box-arrow-right"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<hr class="mt-3">

<div class="container">
    {{ $slot }}
</div>
