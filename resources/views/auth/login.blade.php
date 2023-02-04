
  @extends('layout.template')
  @section ('title','Login')
  @section('content')
      
  <!-- Loader starts-->
  <div class="loader-wrapper">
      <div class="theme-loader">    
          <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    @if(session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible  fade show" role="alert">
            {{session('gagal')}}
            <button class="btn-close" type="button"></button>
        </div>
    @endif
    <!-- page-wrapper Start-->
    <section>         
        <div class="container-fluid p-0">
            <div class="row">
          <div class="col-12">
              <div class="login-card">
                <form class="theme-form login-form" method="POST"  action="{{ route ('login')}}">
                    @csrf
                <h4>Login</h4>
                <h6>PMKS Anak Yatim Kabupaten Lombok Tengah</h6>
                <div class="form-group">
                  <label>Username </label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" type="text" required="" placeholder="masukan username" name="username">
                </div>
            </div>
                <div class="form-group">
                    <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection