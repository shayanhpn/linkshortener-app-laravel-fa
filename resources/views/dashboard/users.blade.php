<x-dashboard-layout>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>ایمیل</th>
            <th>تاریخ عضویت</th>
            <th>عملیات</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->firstname}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td><div class="text-center">
                <a href="{{route('admin.single.user',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="نمایش"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{route('admin.view.update-user',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="fa fa-pen mx-2" aria-hidden="true"></i></a>
                <a href="{{route('admin.view.delete-user',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div></td>
        </tr>
        @endforeach
    </table>
</div>

</x-dashboard-layout>