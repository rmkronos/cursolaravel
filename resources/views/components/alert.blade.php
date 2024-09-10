@if (session('success'))

    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

@if (session('error'))

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>{{session('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

@if ($errors->any())

@foreach ($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endforeach
@endif
