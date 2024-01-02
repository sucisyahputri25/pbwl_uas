@extends('layouts.app')

@section('content')
    <h2>Add Servis</h2>

    <form action="{{ url('servis') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">SERVIS</label>
            <input type="text" name="ser_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control">
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
