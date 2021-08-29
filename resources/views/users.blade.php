<h1>Users Blade Template</h1>
@foreach ($variable as $user)
    @foreach ($user as $prop)
        @if($prop['gender'] == 'male')
            <h3>Hello Mr. {{$prop['name']}}</h3>
        @elseif($prop['gender'] == 'female')
            <h3>Hello Miss. {{$prop['name']}}</h3>
        @else
            <h3>Hello Gay. {{$prop['name']}}</h3>
        @endif
    @endforeach
@endforeach
<?php
/* Bakwas way of Comments in Blade Template
Example 1
{{$username}}
Example 2
<ol>
    @foreach ($variable as $user)
        <li>{{$user}}</li>
    @endforeach
</ol>

Example 3
@foreach ($variable as $user)
    @foreach ($user as $prop)
        @if($prop['gender'] == 'male')
            <h3>Hello Mr. {{$prop['name']}}</h3>
        @elseif($prop['gender'] == 'female')
            <h3>Hello Miss. {{$prop['name']}}</h3>
        @else
            <h3>Hello Gay. {{$prop['name']}}</h3>
        @endif
    @endforeach
@endforeach


