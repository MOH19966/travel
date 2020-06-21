<x-app>




<div class="container">
    <h1> Complete Your Info Please </h1>


<form action="{{ route('InfoCompleted',['id'=>curr_user_id()]) }}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <label for="personalPhoto"></label>
  <input type="file" class="form-control-file" name="personalPhoto" id="personalPhoto" placeholder="" aria-describedby="fileHelpId">
  <small id="fileHelpId" class="form-text text-muted">يرجي تحميل الصورة الشخصية</small>
</div>
@error('personalPhoto')
<p> {{ $message }}</p>
@enderror


<div class="form-group">
  <label for=collegePhoto""></label>
  <input type="file" class="form-control-file" name="collegePhoto" id="collegePhoto" placeholder="" aria-describedby="fileHelpId">
  <small id="fileHelpId" class="form-text text-muted">collegePhoto</small>
</div>

@error('collegePhoto')
<p> {{ $message }}</p>
@enderror


<button type="submit" class="btn btn-primary">Submit</button>






</form>



</div>





</x-app>
