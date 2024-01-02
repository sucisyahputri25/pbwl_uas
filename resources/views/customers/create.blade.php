@extends('layouts.app')

@section('content')
    <h2>Add Customers</h2>

    <form action="{{ url('customers') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="no_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
