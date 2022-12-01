@extends('layout')

@section('title', 'Data Eskul page')

@section('content')
<table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namaeskul</th>
                        <th>namapembina</th>
                        <th>jumlahanggota</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namaeskul }}</td>  
                <td>{{ $person->namapembina }}</td>
                <td>{{ $person->jumlahanggota }}</td>
        </tr>   
@endforeach
</table>
@endsection