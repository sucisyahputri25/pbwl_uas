@extends('layouts.app')
@section('content')

<style>
    body {
        background-color: #FFFFFF;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #86A789;
    }

    .gradient-bg {
        background: linear-gradient(to right, #86A789, #D2E3C8);
    }

    .form-container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #86A789;
        color: #ffffff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn-primary {
        background-color: #86A789;
        color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #D2E3C8;
    }

    .btn-link {
        color: #86A789;
    }

    .btn-link:hover {
        color: #D2E3C8;
    }

    .table {
        margin-top: 20px;
    }

    .table th, .table td {
        border: 3px solid #D2E3C8;
    }

    .table th {
        background-color: #86A789;
        color: #ffffff;
    }

    .table td {
        background-color: #ffffff;
        color: #000000;
    }

    .btn-warning {
        background-color: #FFD700;
        border: none;
        border-radius: 5px;
        color: #000000;
    }

    .btn-warning:hover {
        background-color: #B8860B;
    }

    .btn-danger {
        background-color: #DC143C;
        border: none;
        border-radius: 5px;
        color: #ffffff;
    }

    .btn-danger:hover {
        background-color: #8B0000;
    }
</style>

<h2>customers</h2>

<a href="{{ url('customers/create') }}" class="btn btn-primary mb-3 float-end">Add customers</a>

<table class="table table-bordered">
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NO HP</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @php
            $counter = 1;
      @endphp

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $counter++ }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->no_hp }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->alamat }}</td>

                  <td><a href="{{ url('customers/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('customers/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection
