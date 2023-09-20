<x-main-layout>
<div class="main-section">
        <div class="container text-center">
            <div class="card border-0 shadow-sm">
                <div class="card-header badge bg-darkgreen border-0">
                  کوتاه کننده لینک
                </div>
                <div class="card-body">
                  <h4 class="card-title">لینک شما با موفقیت ساخته شد</h4>
                  <p>لینک شما:</p>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="col-md-6 p-2 " style="background-color: rgb(237, 237, 237)"><a target="_blank" href="{{route('redirect',$dest)}}">{{route('redirect',$dest)}}</a></div>
                    </div>
                </div>
              </div>
        </div>
      </div>
</x-main-layout>