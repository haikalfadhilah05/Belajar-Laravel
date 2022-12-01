@extends('layout')

@section('title', 'Data Prestasi page')

@section('content')
        <table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namaprestasi</th>
                        <th>tingkat</th>
                        <th>juarake</th>
                        <th>namapeserta</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namaprestasi }}</td>
                <td>{{ $person->tingkat }}</td>
                <td>{{ $person->juarake }}</td>
                <td>{{ $person->namapeserta }}</td>
        </tr>   
@endforeach
</table>
@endsection
