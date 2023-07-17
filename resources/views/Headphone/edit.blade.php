@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA HANDPHONE</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/headphone/' .$row->obat_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS HANDPHONE</label>
                        <select name="obat_id_jenisheadphone" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenisheadphone as $jenis)
                                <option value="{{$jenis->jenisheadphone_id}}">{{$jenis->jenisheadphone_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA HANDPHONE</label>
                        <input type="text" name="headphone_nama" class="form-control" value="{{$row->headphone_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="headphone_harga" class="form-control" value="{{$row->headphone_harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="headphone_stock" class="form-control" value="{{$row->headphone_stock}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection