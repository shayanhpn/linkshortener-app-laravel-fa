<x-main-layout>
<body class="bg-light">
      <div class="d-flex flex-row justify-content-center">
        <div class="col-md-4">
            <div class="main-section register">
                <div class="container text-center">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header badge bg-darkgreen border-0">
                          ثبت نام
                        </div>
                        <div class="card-body my-4">
                          <h4 class="card-title my-4">حساب کاربری بسازید</h4>
                          <form action="{{route('register')}}" method="POST">
                            @csrf
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="نام" name="firstname" value="{{old('firstname')}}">
                            @error('firstname') <p class="text-danger">{{$message}}</p> @enderror
                            <input type="text" class="form-control my-2 @error('lastname') is-invalid @enderror" placeholder="نام خانوادگی" name="lastname" value="{{old('lastname')}}">
                            @error('lastname') <p class="text-danger">{{$message}}</p> @enderror
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{old('email')}}">
                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                            <input type="text" class="form-control my-2 @error('phonenumber') is-invalid @enderror" placeholder="شماره همراه" name="phonenumber" value="{{old('phonenumber')}}">
                            @error('phonenumber') <p class="text-danger">{{$message}}</p> @enderror
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password">
                            @error('password') <p class="text-danger">{{$message}}</p> @enderror
                            <input type="password" class="form-control my-2" placeholder="تکرار رمز عبور" name="password_confirmation">
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
                            <button class="btn bg-darkgreen text-white">ثبت نام</button>
                          </form>
                        </div>
                        <p>اگر حساب کاربری دارید از <a href="{{route('login')}}" class="text-decoration-none">اینجا</a> وارد شوید</p>
                      </div>
                </div>
            </div>
        </div>
      </div>
</x-main-layout>