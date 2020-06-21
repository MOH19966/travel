<x-app>

    <div class="container">
        <h1>Profile</h1>

        <ul>

                <li>Image <img src="{{is_null($PI->college_card_image)? 'https://i.pravatar.cc/35?u='.curr_user_id() : asset('storage/'.$PI->college_card_image) }}"
                    alt="" srcset="" width="60" height="40" ></li>
                <li>Name: {{$PI->full_name}}</li>
                <li>university:{{$PI->university}}</li>
                <li>college:{{$PI->college}}</li>
                <li>year:{{$PI->year}}</li>
                <li>Rating: {{$rating }}</li>

</ul>

@can('update', $PI)

        <a name="edit Profile" id="" class="btn btn-primary"
        href="{{ route('info.edit',curr_user_id()) }}"
        role="button">
        Edit Profile
        </a>

@endcan


        <!-- i send the number and ro notification and
             user_id and profile teacher id and fullname-->
        <!-- if this profile brlongd to the sane lohin user dont show enroll-->
        @if(curr_user_id()<>$PI->user_id)
        <a name="enroll" id="" class="btn btn-primary"

        href="{{
         route('enroll',[
            'id'=>curr_user_id(),
            'teacher_id'=>$PI->user_id ,
            'teacher_full_name'=>$PI->full_name ])

            }}"
        role="button">
            طلب الرقم
        </a>

            @endif


    </div>






</x-app>
