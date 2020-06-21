<x-app>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                   <h1>Home</h1>

                                   @auth

                    <div ><h1><a href="{{route('sub.select' , auth()->user())}}">تدريس طلاب جامعة</a></h1></div>
                    <div><h1><a href="{{route('sub.request' , auth()->user())}}">طلب أستاذ لمادة</a></h1></div>
                    <div><h1><a href="{{route('material.select')}}"> التدريس في مدارس حكومية </a></h1></div>

                                   @endauth


                </div>
            </div>
        </div>
    </div>
</div>


</x-app>
