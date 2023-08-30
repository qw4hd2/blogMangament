<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Creato</th>
            <th scope="col">status</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->title}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->created_at->format("d/m/y")}}</td>
            <td>
                {{$article->is_accepted? "Publicato":"Non publicato"}}
            </td>
            <td>
                <a href="{{route('article.edit',$article)}}" class="btn btn-info">Modifica</a>
            </td>
            <td>
                <form action="{{route('article.delete',$article)}}" class="w-50" method="post">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>