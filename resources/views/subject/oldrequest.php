<x-app>




<div class="container">
                                 <form-subjects></form-subjects>
                                   <h1>ask for teacher</h1>

<form action="{{ route('sub.index')}}" method="post">
            @csrf

            <div class="form-group">
            <!--for subject name-->
                <div class="form-group">
                    <label for="subject">اسم المادة
                    </label>
                    <select class="form-control" name="subject" id="subject">

                        @foreach ($x as $subject)

                    <option value="{{$subject->id}}">{{$subject->name}} ---
                                                     {{'Year:'.$subject->year}}
                    </option>
                        @endforeach


                    </select>
                </div>


                <div class="form-group">
            <!--for fpr colleges-->
                <div class="form-group">
                    <label for="college">الكلية
                    </label>
                    <select class="form-control" name="college" id="college">

                        @foreach ($y as $college)

                    <option value="{{$college->id}}">{{$college->name}}

                    </option>
                        @endforeach


                    </select>
                </div>
                 <div class="form-group">
            <!--for fpr colleges-->
                <div class="form-group">
                    <label for="university">الجامعة
                    </label>
                    <select class="form-control" name="university" id="university">

                        @foreach ($z as $university)

                    <option value="{{$university->id}}">{{$university->name}}

                    </option>
                        @endforeach


                    </select>
                </div>


                     </div>


      <button name="submit" type="submit" class="btn btn-primary">عرض الأساتذة</button>
    </div>

</form>



                </div>
            </div>
        </div>
    </div>
</div>


</x-app>
