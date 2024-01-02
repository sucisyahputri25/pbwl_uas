@extends('layouts.app')

@section('content')
    <h2>Edit servis</h2>

    <form action="{{ url('servis/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">SERVIS</label>
            <input type="text" name="ser_nama" id="" class="form-control" value="{{ $row->ser_nama}}">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control" value="{{ $row->harga}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
