@extends('layouts.app')

@section('content')
    <h2>Edit appointment</h2>

    <form action="{{ url('appointment/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">ID CUSTOMERS</label>
            <input type="text" name="cus_id" id="" class="form-control" value="{{ $row->cus_id }}">
        </div>
        <div class="mb-3">
            <label for="">ID SERVIS</label>
            <input type="text" name="ser_id" id="" class="form-control" value="{{ $row->ser_id }}">
        </div>
        <div class="mb-3">
            <label for="">TANGGAL</label>
            <input type="datetime-local" name="tanggal" id="" class="form-control" value="{{ $row->tanggal }}">
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
