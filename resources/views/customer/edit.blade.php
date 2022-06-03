@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('customer/'.$model->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $model->nama }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Asal</label>
      <input type="text" class="form-control" name="asal" value="{{ $model->asal }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection