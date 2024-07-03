@extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h6><i class="icon fas fa-check"></i>{{ $message }}</h6>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('customer.create') }}" class="btn btn-success float-end">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->code }}</td>
                            <td>{{ $customer->name }}</td>
                            <td class="d-flex">
                                <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
