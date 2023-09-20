<x-dashboard-layout>
<div class="d-flex flex-row justify-content-center">
            <div class="col-md-6 mt-4 p-4 bg-white shadow-sm">
                <div class="d-flex flex-row justify-content-center">
                    <h3>تنظیمات</h3>
                </div>
                <form action="{{route('admin.submit.setting')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control" placeholder="لوگو" name="logo" value="{{$setting->logo}}">
                    <input type="text" class="form-control my-2" placeholder="توضیحات وبسایت" value="{{$setting->site_description}}" name="site_description">
                    <input type="text" class="form-control" placeholder="عنوان وبسایت" value="{{$setting->title}}" name="title">
                    <input type="text" class="form-control my-2" placeholder="کپی رایت" value="{{$setting->copyright}}" name="copyright">
                    <textarea class="form-control" cols="30" rows="10" placeholder="درباره ما"  name="about">{{$setting->about}}</textarea>
                    <div class="text-center">
                        <button type="submit" class="btn bg-darkgreen text-white mt-4">بروزرسانی</button>
                    </div>
                </form>
            </div>
        </div>
</x-dashboard-layout>