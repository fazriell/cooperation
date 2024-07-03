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

     <div class="card">
        <div class="card-header">
            Pembayaran Simpanan Wajib
        </div>

        <div class="card-body">
            <form action="{{ route('mandatory-saving.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Pilih Nasabah</label>
                    <select name="customer_id" class="form-select">
                        @foreach ($customers as $c)
                            <option value="{{ $c->id }}">{{ $c->code . "-" . $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Jumlah</label>
                    <input type="number" name="amount" placeholder="10000" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="submit" value="Simpan" class="btn btn-success float-end">
                </div>
            </form>
        </div>
     </div>
 @endsection
