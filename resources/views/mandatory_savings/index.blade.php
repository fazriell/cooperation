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
            <a href="{{ route('mandatory-saving.create') }}" class="btn btn-success float-end">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Bayar</th>
                        <th>Kode Bayar</th>
                        <th>Nama Nasabah</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mandatorySavings as $ms)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{  $ms->date }}</td>
                            <td>{{  $ms->customer->code }}</td>
                            <td>{{  $ms->customer->name }}</td>
                            <td>{{  $ms->amount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
