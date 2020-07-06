<x-app>
<div class="container">


                    <h1>selelct subjects to teach</h1>

<form action="{{route('sub.store')}}" method="post">
    @csrf


@foreach ($subjects as $s)

      <div class="form-group col">
        <div class="form-check">
        <br>
        <label class="form-check-label" aria-multiselectable="true">
        <input type="radio" class="form-check-input" multiple
        name="subject[{{$s->id}}]" id="{{$s->id}}" value="{{$s->id}}" >
        {{$s->name}}
      </label>

   </div>

@endforeach
        <div class="form-group row">
       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

</form>
</x-app>
