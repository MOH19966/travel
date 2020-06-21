<x-app>




<div class="container">

    <form action="{{ route('material.save') }}" method="post">

        @csrf



@foreach ($materials as $m)

      <div class="form-group col">
        <div class="form-check">
        <br>
        <label class="form-check-label" aria-multiselectable="true">
        <input type="radio" class="form-check-input" multiple
        name="material[{{$m->id}}]" id="{{$m->id}}" value="{{$m->id}}" >
        {{$m->name}}
      </label>

   </div>

@endforeach
        <div class="form-group row">
       <br><br><button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>





</form>
</div>
</x-app>
