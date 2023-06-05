<x-homelayout class="container">
    <span class="h3 fw-bold text-capitalize text-secondary-emphasis">Welcome! {{ $user->name }}</span>

    @if (count($todos) == 0)
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <i class="bi bi-box-seam-fill text-body-tertiary"
                    style="margin-top: 1.5rem;font-size: 15rem !important"></i>
            </div>
        </div>
    @endif
    <div class="container-fluid">

    </div>


</x-homelayout>
