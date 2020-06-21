<x-app>

<ul>
@foreach ($notifications as $notification)

<li>
     <div class="alert alert-primary" role="alert">
      @if($notification->type ==='App\Notifications\RateTeacher')
      
                <p> Could you rate the teacher {{$notification->data['teacher_full_name'] }}    </p>

            <form action="{{ route('rateTeacher',
                             ['teacher_id'=>$notification->data['teacher_id']]) }}"
                 method="post">
                    @csrf
                    <select name="rate" id="rate">

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                    <button type="submit" class="btn btn-success">Rate</button>

                </form>

       @endif
       </div>
    </li>

@endforeach
</ul>





</x-app>
