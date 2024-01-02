@extends('layouts.app')

@section('content')
    <h2>Add Appointment</h2>

    <form action="{{ url('appointment') }}" method="post">
        @csrf
        <div class="form-group mb-3">
              <label for="cus_id" class="form-label">ID CUSTOMERS</label>
              <select class="form-control @error('cus_id') is-invalid @enderror" name="cus_id" id="cus_id">
                @foreach($customerss as $customers)
                <option value="{{ $customers->id }}">{{ $customers->nama }}</option>
                @endforeach
              </select>
              @error('cus_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="form-group mb-3">
              <label for="ser_id" class="form-label">ID SERVIS</label>
              <select class="form-control @error('ser_id') is-invalid @enderror" name="ser_id" id="ser_id">
                @foreach($serviss as $servis)
                <option value="{{ $servis->id }}">{{ $servis->ser_nama }}</option>
                @endforeach
              </select>
              @error('ser_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="mb-3">
            <label for="">TANGGAL</label>
            <input type="datetime-local" name="tanggal" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
