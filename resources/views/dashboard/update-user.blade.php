<x-dashboard-layout>
    <h4 class="my-2"><span class="badge bg-secondary">ویرایش کاربر</span></h4>
    <hr>
    <form action="{{route('admin.update.user',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="col-md-6">
        <input type="text" class="form-control" placeholder="نام" value="{{$user->firstname}}" name="firstname">
        <input type="text" class="form-control my-2" placeholder="نام خانوادگی" value="{{$user->lastname}}" name="lastname">
        <input type="text" class="form-control" placeholder="شماره تماس" value="{{$user->phonenumber}}" name="phonenumber">
        <input type="email" class="form-control my-2" placeholder="ایمیل" value="{{$user->email}}" name="email">
        <button type="submit" class="btn btn-primary my-4">ویرایش</button>
    </div>
    </form>
</x-dashboard-layout>