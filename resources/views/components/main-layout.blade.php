<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>AdmiLink</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-lightgreen">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('main')}}">{{optional($setting)->logo}}</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('main')}}">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('about')}}">درباره ما</a>
                </li>
                @if(auth()->check())
                <li class="nav-item">
                  <a href="{{route('admin.panel')}}" class="nav-link btn bg-darkgreen text-white">حساب کاربری</a>
                </li>
                @else
                <li class="nav-item">
                  <a href="{{url('login')}}" class="nav-link btn bg-darkgreen text-white">ورود</a>
                </li>
                @endif
              </ul>
            </div>

        </div>
      </nav>

      @if(session()->has('success'))
      <div class="col-md-3 position-absolute my-4 mx-4 success-alert">
        <div class="alert alert-success rounded-0" role="alert">
          {{session('success')}}
        </div>
      </div>
      @endif

      @if(session()->has('danger'))
      <div class="col-md-3 position-absolute my-4 mx-4 danger-alert">
        <div class="alert alert-danger rounded-0" role="alert">
          {{session('danger')}}
        </div>
      </div>
      @endif

{{$slot}}

<footer class="mt-4">
    <div class="bg-darkgreen-nohover py-2 position-fixed w-100 bottom-0 footer-sec">
        <div class="text-center text-white">{{optional($setting)->copyright}}</div>
    </div>
  </footer>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>