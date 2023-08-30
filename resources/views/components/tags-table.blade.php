@props(['tags'])
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Articoli</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
        <tr>
            <th scope="row">{{$tag->id}}</th>
            <td>{{$tag->name}}</td>
            <td>{{count($tag->articles)}}</td>
            <td>
                <form action="{{route('tag.edit',$tag)}}" method="post" class="w-50">
                    @csrf
                    <input type="text" name="name" placeholder="nuovo nome" class="form-control">
                    <button type="submit" class="btn btn-info">Salva</button>
                </form>
            </td>
            <td>
                <form action="{{route('tag.delete',$tag)}}" class="w-50" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>