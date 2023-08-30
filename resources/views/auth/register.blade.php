<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="container-fluid registration-card">
    <div class="row registration-card-row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="header">
                    <img src="{{asset('assets/images/logo/hero-logo.png')}}" alt="" srcset="" class="img img-fluid img-hero-logo">
                    <p class="header-heading">Registration</p>
                </div>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label label-form">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label label-form">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label label-form">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirm" class="form-label label-form">Password confirmation</label>
                        <input type="password" class="form-control" id="exampleInputPasswordConfirm" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-registration btn-block">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
