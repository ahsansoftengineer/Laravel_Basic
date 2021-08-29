<h1>User Blade File</h1>
@include('inner')
@foreach($data as $item)
<h2>{{$item}}</h2>
@endforeach

@csrf
<script>
    var data = @json($data);
    console.log(data[0]);
</script>
