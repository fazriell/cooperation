@extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h6><i class="icon fas fa-check"></i>{{ $message }}</h6>
    </div>
@endif
    <div class="card rounded">
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
<style>
    body {
            background-image: url('img/1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: monospace;
            font-size: 15px;
        }

        .card {
            margin-top: 50px;

        }
</style>
@endsection
