@extends('layouts.master')
@section('title', 'Data Pengaju')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pengaju</h4>
                            <a href="#" data-toggle="modal" data-target="#modalTambahPengaju" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No Telepon</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Nama Instansi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pengaju as $pnj)
                                        <tr>
                                            <td>{{$pnj->id}}</td>
                                            <td>{{$pnj->nama_pengaju}}</td>
                                            <td>{{$pnj->email}}</td>
                                            <td>{{$pnj->no_telp}}</td>
                                            <td>{{$pnj->level}}</td>
                                            <td>{{$pnj->nama_instansi}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#modalEditPengaju" class="btn btn-warning">Edit</a>
                                                <a href="/pengaju/{{$pnj->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Di Hapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('home.pengaju.tambah')
@include('home.pengaju.edit')


@endsection
