<x-dashboard-layout>
    <h4 class="my-2"><span class="badge bg-secondary">نمایش کاربر</span></h4>
    <hr>
    <div class="col-md-6">
        <input type="text" class="form-control" placeholder="نام" value="{{$user->firstname}}" disabled>
        <input type="text" class="form-control my-2" placeholder="نام خانوادگی" value="{{$user->lastname}}" disabled>
        <input type="text" class="form-control" placeholder="شماره تماس" value="{{$user->phonenumber}}" disabled>
        <input type="text" class="form-control my-2" placeholder="ایمیل" value="{{$user->email}}" disabled>
        <input type="text" class="form-control" placeholder="تاریخ ایجاد" value="{{$user->created_at}}" disabled>
    </div>
</x-dashboard-layout>