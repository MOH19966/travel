<x-app>
    shortages.index template


    @foreach ($shortages as $shortage)

        <br>
        {{ $shortage->school_name }} 
        {{ $shortage->grade_name}}
        {{ $shortage->grade_type}}
        {{ $shortage->material_name}}
        {{ $shortage->houres}}
        <br>
    @endforeach

    </x-app>
