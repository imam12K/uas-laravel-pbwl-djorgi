@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA HANDPHONE</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('headphone/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>JENIS HANDPHONE</td>
                        <td>NAMA</td>
                        <td>HARGA</td>
                        <td>STOCK</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->headphone_id}}</td>
                        <td>{{ $row->jenisheadphone->jenisheadphone_nama}}</td>
                        <td>{{ $row->headphone_nama}}</td>
                        <td>{{ $row->headphone_harga}}</td>
                        <td>{{ $row->headphone_stock}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('headphone/' .$row->headphone_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('headphone/' .$row->obat_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection