@extends('layouts.main')

@section('content')
<br>
<center>
  <a class="btn btn-success" href="{{ url('customer/create') }}">Tambah</a>
</center>
<br>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Asal</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $value)
            <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->asal }}</td>
                <td>{{ $value->tanggal_lahir }}</td>
                <td><a href="{{ url('customer/'.$value->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
                <td>
                  <form action="{{ url('customer/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection