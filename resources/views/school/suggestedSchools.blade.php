<x-app>


<div class="container">
    <h1> المدارس المتاحة في موقعك وبحاجة لأساتذة

    </h1>



@foreach ($shortages as $s)

<div class="alert alert-danger" role="alert">
  <h2 class="alert-heading">{{$s->school_name}}</h4>
  <b>{{$s->material_name}}</b>
  <p class="mb-0">{{$s->grade_name}} </p>
  <a name="" id="" class="btn btn-primary" href="#" role="button">enroll</a>
 

@endforeach








</div>





</x-app>
