@extends('layouts.app')

@section('content')
    <h2>Edit customers</h2>

    <form action="{{ url('customers/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control" value="{{ $row->nama}}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="no_hp" id="" class="form-control" value="{{ $row->no_hp}}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email}}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control" value="{{ $row->alamat}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
