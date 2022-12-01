@extends('layout')

@section('title', 'Data Peserta Didik page')

@section('content')
        <table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>nis</th>
                        <th>namalengkap</th>
                        <th>jk</th>
                        <th>kelas</th>
                        <th>alamat</th>
                        <th>status</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->nis }}</td>  
                <td>{{ $person->namalengkap }}</td>
                <td>{{ $person->jk }}</td>
                <td>{{ $person->kelas }}</td>
                <td>{{ $person->alamat }}</td>
                <td>{{ $person->status }}</td>
        </tr>   
@endforeach
</table>
@endsection
