@extends('template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Tambah Data Produk
            </div>
            <div class="card-body">
                <form action="{{url('produk')}}" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama">
                  </div><div class="form-group">
                      <label for="" class="control-label">Harga</label>
                      <input type="harga" class="form-control" name="harga">
                  </div><div class="form-group">
                      <label for="" class="control-label">Stok</label>
                      <input type="stok" class="form-control" name="stok">
                  </div><div class="form-group">
                      <label for="" class="control-label">Berat</label>
                      <input type="berat" class="form-control" name="berat">
                  </div> 
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection