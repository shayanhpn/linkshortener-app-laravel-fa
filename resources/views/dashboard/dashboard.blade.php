<x-dashboard-layout>
        <div class="row p-4">
            <div class="col-xs-12 col-md-4">
                <div class="card bg-white mb-3 shadow-sm border-0" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">تعداد کل کاربران</h5>
                      <p><i class="fa fa-users" aria-hidden="true"></i></p>
                      <p class="card-text">{{$users->count()}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card bg-white mb-3 shadow-sm border-0" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">تعداد کل لینک ها</h5>
                      <p><i class="fa fa-link" aria-hidden="true"></i></p>
                      <p class="card-text">{{$links->count()}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card bg-white mb-3 shadow-sm border-0" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">تنظیمات</h5>
                      <p><i class="fa fa-cog" aria-hidden="true"></i></p>
                      <p class="card-text">*</p>
                    </div>
                </div>
            </div>
            <hr>
            <h4 class="badge bg-secondary">آخرین لینک های ساخته شده</h4>
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
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</x-dashboard-layout>