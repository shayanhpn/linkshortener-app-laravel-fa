<x-dashboard-layout>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th>لینک مبدا</th>
                <th>لینک مقصد</th>
                <th>تاریخ درخواست</th>
                <th>ساخته شده توسط</th>
                <th>عملیات</th>
            </tr>
            @if($links->count() == null)
            <tr>
                <td colspan="9">هیچ رکوردی برای نمایش وجود ندارد</td>
            </tr>
            @endif
            @foreach ($links as $link )
            <tr>
                <td><a href="{{$link->source_link}}">{{$link->source_link}}</a></td>
                <td><a href="{{$link->source_link}}">{{route('redirect',$link->destination_link)}}</a></td>
                <td>{{$link->created_at}}</td>
                <td>{{$link->user->email}}</td>
                <td><div class="text-center">
                    <a href="{{route('admin.view.delete-link',$link->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div></td>
            </tr>
            @endforeach
        </table>
    </div>
</x-dashboard-layout>