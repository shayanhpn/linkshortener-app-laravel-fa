<x-main-layout>

      @if(!auth()->check())
      <div class="main-section">
        <div class="container text-center">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                  <h4 class="card-title">نیاز به مدیریت لینک های خود دارید؟</h4>
                  <p class="text-secondary">برای مدیریت و ساخت لینک های خود، ثبت نام کرده و بصورت بی نهایت و رایگان از آن استفاده کنید</p>
                    <a href="{{route('register')}}" class="btn bg-darkgreen text-white mt-3">ساخت حساب کاربری</a>
                </div>
              </div>
        </div>
      </div>
      @else
      <div class="main-section">
        <div class="container text-center">
            <div class="card border-0 shadow-sm">
                <div class="card-header badge bg-darkgreen border-0">
                  کوتاه کننده لینک
                </div>
                <div class="card-body">
                  <h4 class="card-title">لینک خود را کوتاه کنید</h4>
                  <form action="{{route('linkgen')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" class="form-control @error('sourceLink') is-invalid @enderror" placeholder="لینک خود را اینجا وارد کنید..." name="sourceLink">
                    @error('sourceLink') <p class="text-danger">{{$message}}</p> @enderror
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
                    <button type="submit" id="submit-form" class="btn bg-darkgreen text-white mt-3">ثبت</button>
                  </form>
                </div>
                <h4><span class="badge bg-success my-4" id="result"></span><br></h4>
                <a href="#" id="link" style="background-color: rgb(215, 215, 215)"></a>
              </div>
        </div>
      </div>
      @endif

</x-main-layout>