@extends('layouts.master')
@section('title', 'Data Admin')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Admin</h4>
                            <a href="#" data-toggle="modal" data-target="#modalTambahAdmin" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Telepon</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admin as $adm)
                                        <tr>
                                            <td>{{$adm->id}}</td>
                                            <td>{{$adm->nama_admin}}</td>
                                            <td>{{$adm->email}}</td>
                                            <td>{{$adm->no_telp}}</td>
                                            <td>{{$adm->username}}</td>
                                            <td>{{$adm->password}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#modalEditAdmin" class="btn btn-warning">Edit</a>
                                                <a href="/admin/{{$adm->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Di Hapus?')">Hapus</a>
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
@include('home.admin.tambah')
@include('home.admin.edit')

@endsection
