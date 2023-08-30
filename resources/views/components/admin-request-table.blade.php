@props(['adminRequests'])
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($adminRequests as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('admin.makeUserAdmin',$user)}}" class="btn btn-primary">Rendi Writer</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>