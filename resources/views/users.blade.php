<table border="1">
    <tr>
        <th>Name</th>
        <th>User Name</th>
        <th>Business Name</th>
        <th>Password</th>
    </tr>
    @foreach($collection as $item)
    <tr>
        <th>{{ $item['name'] }}</th>
        <td>{{ $item['userName'] }}</td>
        <td>{{ $item['businessName'] }}</td>
        <td>{{ $item['password'] }}</td>
        {{-- <td><img src="{{ $item['flag'] }}" style="height: 70px; width:100px" alt=""></td> --}}
    </tr>
    @endforeach
</table>
