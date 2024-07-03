@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
           <p>ERROR!!!</p>
           @foreach ($errors->all() as $item)
               <li>{{ $item }}</li>
           @endforeach
        </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h6><i class="icon fas fa-check"></i>{{ $message }}</h6>
    </div>
@endif

    <div class="card">
       <div class="card-header">
           Ubah Data Nasabah #{{ $customer->code }}
       </div>

       <div class="card-body">
           <form action="{{ route('customer.update') }}" method="post">
               @csrf
               @method('PUT')
               <input type="hidden" name="id" value="{{ $customer->id }}">
               <div class="mb-2">
                   <label for="">Nama Nasabah</label>
                   <input type="text" name="name" placeholder="Masukkan Nama Nasabah" value="{{ $customer->name }}" class="form-control">
               </div>
               <div class="mb-2">
                   <label for="">Telepon Nasabah</label>
                   <input type="text" name="phone" placeholder="08xxxxxx" value="{{ $customer->phone }}" class="form-control">
               </div>
               <div class="mb-2">
                   <label for="">Alamat Nasabah</label>
                   <textarea name="address" cols="30" rows="3" placeholder="Jl. xxxx" class="form-control">{{ $customer->address }}</textarea>
               </div>
               <div class="mb-2">
                   <input type="submit" value="Ubah" class="btn btn-success float-end">
               </div>
           </form>
       </div>
    </div>
@endsection