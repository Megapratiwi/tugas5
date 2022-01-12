@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data Produk    
                    </div>
                    <div class="card-body">
                        <h1>{{$produk->nama}}</h1>
                        <hr>
                        <p>
                            {{"@".($produk->namaproduk)}} |
                            harga : {{$produk->harga}}
                            stok : {{$produk->stok}} | 
                        </p>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection