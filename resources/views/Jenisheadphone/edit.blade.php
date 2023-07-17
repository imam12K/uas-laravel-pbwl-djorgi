@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA JENIS HANDPHONE</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/jenisheadphone/' .$row->jenisheadphone_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA JENIS HANDPHONE</label>
                        <input type="text" name="jenisheadphone_nama" class="form-control" value="{{$row->jenisheadphone_nama}}">
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