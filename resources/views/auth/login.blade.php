<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<div class="container-fluid login-card">
    <div class="row login-card-row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="header">
                        <img src="{{asset('assets/images/logo/hero-logo.png')}}" alt="" srcset="" class="img img-fluid img-hero-logo">
                        <p class="header-heading">Log In</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label label-form">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label label-form">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-login btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

