<!DOCTYPE html>
<html lang="fa"  dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">

    <title>{{optional($setting)->title}}</title>
</head>
<body class="bg-light h-100">
    <ul class="nav flex-column bg-dark horiz-nav position-fixed h-100">
        <h3 class="logo text-white text-center p-4">{{optional($setting)->logo}}</h3>
        @if(auth()->user()->isAdmin)
        <li class="mt-4">
            <a type="button" class="btn bg-darkgreen text-white w-100 rounded-0 {{Route::is('admin.users') ? 'active' : ''}}"  href="{{route('admin.users')}}">کاربران</a>
        </li>
        <li class="my-2">
            <a type="button" class="btn bg-darkgreen text-white w-100 rounded-0 {{Route::is('admin.links') ? 'active' : ''}}"  href="{{route('admin.links')}}">لینک ها</a>
        </li>
        @endif
        <li class="my-2">
            <a type="button" class="btn bg-darkgreen text-white w-100 rounded-0 {{Route::is('users.links') ? 'active' : ''}}"  href="{{route('users.links')}}">لینک های من</a>
        </li>
        <li>
            <a type="button" class="btn bg-darkgreen my-2 text-white w-100 rounded-0 {{Route::is('admin.view.settings') ? 'active' : ''}}"  href="{{route('admin.view.settings')}}">تنظیمات</a>
        </li>
    </ul>
    <div class="main-div">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
                <a class="navbar-brand" href="{{route('admin.panel')}}">داشبورد</a>
                <a class="navbar-brand" href="{{route('main')}}"><span class="badge bg-secondary">مشاهده سایت</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dashboardNavbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="dashboardNavbar">
                  <ul class="navbar-nav">
                    @if(auth()->user()->isAdmin)
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.users')}}">کاربران</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.links')}}">لینک ها</a>
                    </li>
                    @endif
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('users.links')}}">لینک های من</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.view.settings')}}">تنظیمات</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a type="button" class="text-decoration-none nav-link dropdown-toggle" data-bs-toggle="dropdown"> سلام {{auth()->user()->firstname}}!</a>
                      <ul class="dropdown-menu p-3">
                        <li><a href="{{route('admin.view.update-user',auth()->user()->id)}}" class="dropdown-item text-decoration-none">تنظیمات حساب کاربری</a></li>
                        <li><a href="{{route('users.links')}}" class="dropdown-item text-decoration-none">لینک های من</a></li>
                        <hr>
                        <li><form action="{{route('logout')}}" method="POST">@csrf<button type="submit" class="btn btn-danger px-4">خروج</button></form></li>
                    </ul>
                    </li>
                  </ul>
                </div>
              
              </nav>
    </div>
    @if(session()->has('success'))
    <div class="col-md-3 position-absolute my-4 mx-4 success-alert z-1">
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
    <div class="main-div p-4">
        {{$slot}}
    </div>
    <div class="main-div">
      <div class="bg-darkgreen-nohover py-2 position-fixed w-100 bottom-0 footer-sec">
        <div class="text-center text-white">{{optional($setting)->copyright}}</div>
    </div>
    </div>
    
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>