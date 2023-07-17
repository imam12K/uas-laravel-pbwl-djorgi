@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA HANDPHONE</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/headphone')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS HANDPHONE</label>
                        <select name="headphone_id_jenisheadphone" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenisheadphone as $jenis)
                                <option value="{{$jenis->jenisheadphone_id}}">{{$jenis->jenisheadphone_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA HANDPHONE</label>
                        <input type="text" name="headphone_nama" class="form-control" placeholder="Nama headphone">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="headphone_harga" class="form-control" placeholder="Harga headphone">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="headphone_stock" class="form-control" placeholder="Stock headphone">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection