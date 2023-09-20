<x-main-layout>
<body class="bg-light">
      <div class="d-flex flex-row justify-content-center">
        <div class="col-md-4">
            <div class="main-section">
                <div class="container text-center">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header badge bg-darkgreen border-0">
                          ورود
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">وارد شوید</h4>
                          @if(auth()->check())
                          <h4>شما قبلا وارد شده اید</h4>
                          @else
                          <form action="{{route('login')}}" method="POST">
                            @csrf
                            @method('POST')
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email">
                            @error('email')<p class="text-danger">{{$message}}</p> @enderror
                            <input type="password" class="form-control my-2 @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password">
                            @error('password')<p class="text-danger">{{$message}}</p> @enderror
                            <hr>
                            <div class="row my-2">
                              <div>
                                  <img src="{{captcha_src()}}" id="captcha-image" alt="">
                                  <a type="button" class="btn btn-sm btn-primary text-white" id="reload-captcha">بارگذاری مجدد</a>
                                  <div class="d-flex flex-row justify-content-center mt-2">
                                  <div class="col-md-4 text-center">
                                    <input type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" placeholder="کد امنیتی">
                                    @error('captcha') <p class="text-danger">{{$message}}</p> @enderror
                                  </div>
                                </div>
                              </div>
                      </div>
                            <button type="submit" class="btn bg-darkgreen text-white mt-3">ورود</button>
                          </form>
                          @endif
                        </div>
                        @if(!auth()->check())
                        <p>اگر نیاز به ساخت حساب کاربری دارید از <a href="{{route('register')}}" class="text-decoration-none">اینجا</a> ثبت نام کنید</p>
                        @endif
                      </div>
                </div>
            </div>
        </div>
      </div>
</x-main-layout>