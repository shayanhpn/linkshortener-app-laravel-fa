<x-dashboard-layout>
    <div class="d-flex flex-row justify-content-center">
        <form class="bg-white shadow-sm p-4 rounded" action="{{route('admin.delete.user',$user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <h4>آیا مایل به حذف کاربر {{$user->firstname}} {{$user->lastname}} می باشید؟</h4>
            <button type="submit" class="btn btn-danger">حذف</button>
            <a class="btn btn-warning" href="{{route('admin.users')}}">برگشت</a>
        </form>
    </div>
</x-dashboard-layout>