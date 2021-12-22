<div class="alert alert-warning alert-{{ $color }} fade show d-flex justify-content-between" role="alert">
    <p class="mb-0">
        {{ $slot }}
        <span class="badge bg-primary">{{ $checkResult() }}</span>
        {{ $href }}
    </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
