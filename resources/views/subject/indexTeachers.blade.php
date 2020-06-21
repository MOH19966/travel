


<x-app>






                                   <h1>index Teachers</h1>


@foreach ($TeachersNames as $i)
            <div class="alert alert-primary" role="alert">
                {{$i->fname.' '.$i->lname}}

   <button type="button" name="" id="" class="btn btn-danger" btn-lg>
    <a href="{{ route('info.profile',['id'=>$i->user_id]) }}"> Enroll  </a>
    </button>

</div>





@endforeach





</x-app>
