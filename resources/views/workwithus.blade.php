<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Lavora con noi</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi voluptatem quisquam perferendis quos, tempora, totam, vel autem voluptatum iusto delectus. Ex distinctio quod mollitia aliquam illum sapiente soluta veritatis?</p>
                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi voluptatem quisquam perferendis quos, tempora, totam, vel autem voluptatum iusto delectus. Ex distinctio quod mollitia aliquam illum sapiente soluta veritatis?</p>
                <h3>Lavora come scrittore</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi voluptatem quisquam perferendis quos, tempora, totam, vel autem voluptatum iusto delectus. Ex distinctio quod mollitia aliquam illum sapiente soluta veritatis?</p>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('user.role.request')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label h3">Per posizione vuoi candidarti?</label>
                        <select name="position" class="form-control">
                            <option value="admin">Amministration</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Scrittore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Inviaci la tua email</label>
                        <input type="email" name="email" id="" class="form-control" @auth value="{{Auth::user()->email}}" @endauth>
                    </div>
                    <div class="mb-3">
                        <label class="form-label h5">Perche dovremmo assumerti?</label>
                        <textarea name="presentation" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia candidatura</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>