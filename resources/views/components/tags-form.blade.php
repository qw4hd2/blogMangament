<form action="{{route('tag.store')}}" method="post" class="w-50">
    @csrf
    <label for="">Inserisci un nuovo tag</label>
    <div class="d-flex d-inline">
        <input type="text" name="name" id="" class="form-control w-50" placeholder="nome tag">
        <button type="submit" class="btn btn-info mx-2">Salva</button>
    </div>
</form>