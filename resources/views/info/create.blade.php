<x-app>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
 <div class="card">     <div class="card-header">Dashboard</div>
<div class="card-body">


 <!-- diplay info form-->



                    <form action="{{route('info.store',curr_user())}}" method="post">
                    @csrf
  <div class="form-group">
    <label for="fname">First Name</label>
    <input id="fname" name="fname" type="text" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input id="lname" name="lname" type="text"  class="form-control" required>
  </div>


  <!-- لجامعات-->
  <div class="form-group">
    <label for="university">University</label>
    <div>
      <select id="university" name="university"  class="custom-select" required>
         <!-- add to test-->  <option value="11111" >111</option>
        @foreach ($universities as $u)

      <option value="{{$u->name}}"> {{ $u->name}} </option>


        @endforeach


      </select>
    </div>
  </div>





  <div class="form-group">
    <label for="college">college</label>
    <div>
      <select id="college" name="college" class="custom-select">
                            <option value="11111" >111</option>
         @foreach ($colleges as $c)

        <option value="{{$c->name}}" >{{ $c->name}} </option>

      @endforeach
      </select>

    </div>
  </div>


 <!--- years-->
  <div class="form-group">
    <label for="year">Year</label>
    <div>
      <select id="year" name="year" class="custom-select">
      @foreach ($years as $y)

            <option value="{{$y}}" >{{ ($y)===7 ? "Graduated" : $y  }} </option>
      @endforeach
      </select>
    </div>
  </div>




  <div class="form-group">
    <label for="state">State</label>
    <div>
      <select id="state" name="state" class="custom-select">
        <option value="rabbit">Rabbit</option>
        @foreach ($states as $s)
        <option value="{{$s->name}}" >{{ $s->name}} </option>

        @endforeach

      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="city">city</label>
    <div>
      <select id="city" name="city" required="required" class="custom-select">
        <option value="rabbit">Rabbit</option>
         @foreach ($cities as $c)
        <option value="{{$c->name}}" >{{ $c->name}} </option>

        @endforeach
      </select>
    </div>
  </div>
    <!--Areas-->
  <div class="form-group">
    <label for="area">Area</label>
    <div>
      <select id="area" name="area" class="custom-select">
        <option value="rabbit">Rabbit</option>
         @foreach ($areas as $a)
        <option value="{{$a->name}}" >{{ $a->name}} </option>
        @endforeach
      </select>
    </div>
  </div>

  <!-- villages-->
  <div class="form-group">
    <label for="village">village</label>
    <div>
      <select id="village" name="village" class="custom-select">
        <option value="rabbit">Rabbit</option>
         @foreach ($villages as $v)
        <option value="{{$v->name}}" >{{ $v->name}} </option>
        @endforeach
      </select>
    </div>
  </div>


  <div class="form-group">
    <label>gender</label>
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender1" type="radio" class="custom-control-input" value="male">
        <label for="gender1" class="custom-control-label">M</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender2" type="radio" class="custom-control-input" value="female">
        <label for="gender2" class="custom-control-label">F</label>
      </div>
    </div>
  </div>
  <!-- send user_id -->
  <div class="form-group">

  <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

        </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>




                </div>
            </div>
        </div>
    </div>
</div>
</x-app>
