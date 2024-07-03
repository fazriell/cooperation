@extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h6><i class="icon fas fa-check"></i>{{ $message }}</h6>
    </div>
@endif
    <div class="mb-2">
        <h1>Data Nasabah</h1>
        <table class="table">
            <tr>
                <th>Kode Nasabah</th>
                <td>: {{ $customer->code }}</td>
            </tr>
            <tr>
                <th>Nama Nasabah</th>
                <td>: {{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Alamat Nasabah</th>
                <td>: {{ $customer->address }}</td>
            </tr>
            <tr>
                <th>Telepon Nasabah</th>
                <td>: {{ $customer->phone }}</td>
            </tr>
            <tr>
                <th>Total Simpanan</th>
                <td>: {{ $customer->mandatorySavings->sum('amount') }}</td>
            </tr>
        </table>
    </div>

    <div class="mb-2">
        <h1>Riwayat pembayaran simpanan wajib</h1>
        <table class="table table-hover table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->mandatorySavings as $ms)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ms->date }}</td>
                    <td>{{ $ms->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
