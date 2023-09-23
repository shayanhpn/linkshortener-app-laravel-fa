<x-main-layout>
        <div class="d-flex flex-row justify-content-center mt-4">
            <div class="col-md-9 p-4 bg-white shadow-sm">
                <h3 class="text-center">{{optional($setting)->title}}</h3>
            {{optional($setting)->about}}
            </div>
        </div>
</x-main-layout>