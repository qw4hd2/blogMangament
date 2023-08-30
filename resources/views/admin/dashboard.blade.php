<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    @include('components.navbar')
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di amministratore</h2>
            <x-admin-request-table :adminRequests="$adminRequests"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di revisore</h2>
            <x-revisor-request-table :revisorRequests="$revisorRequests"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di scrittore</h2>
            <x-writer-request-table :writerRequests="$writerRequests"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12 my-2">
            <h2>Crea tag</h2>
            <x-tags-form/>
        </div>
        <div class="col-12">
            <h2>Gestisci i tag</h2>
            <x-tags-table :tags="$tags"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12 my-2">
            <h2>Crea Category</h2>
            <x-categories-form/>
        </div>
        <div class="col-12">
            <h2>Gestisci i Category</h2>
            <x-categories-table :categories="$categories"/>
        </div>
    </div>
</div>