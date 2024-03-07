@extends('layouts.master')
@section('title', 'Mengajukan')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Mengajukan</h4>
                            <a href="#" data-toggle="modal" data-target="#modalTambahMengaju" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Pengaju</th>
                                            <th scope="col">Judul Acara</th>
                                            <th scope="col">Tanggal Acara</th>
                                            <th scope="col">File Proposal</th>
                                            <th scope="col">Lampiran Peserta</th>
                                            <th scope="col">Jenis Kegiatan</th>
                                            <th scope="col">Level Kegiatan</th>
                                            <th scope="col">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mengajukan as $mgj)
                                        <tr>
                                            <td>{{$mgj->id}}</td>
                                            <td>{{$mgj->Pengaju->nama_pengaju}}</td>
                                            <td>{{$mgj->judul_acara}}</td>
                                            <td>{{$mgj->created_at}}</td>
                                            <td><a href="/mengajukan/{{ $mgj->id }}/openproposal" target="_blank"
                                                class="btn btn-primary"><i class="fas fa-file"></i>  Buka File</a></td>
                                            <td><a href="/mengajukan/{{ $mgj->id }}/openproposal" target="_blank"
                                                class="btn btn-primary"><i class="fas fa-file"></i>  Buka File</a></td>
                                            <td>{{$mgj->JenisKegiatan->jenis_kegiatan}}</td>
                                            <td>{{$mgj->JenisKegiatan->level_kegiatan}}</td>
                                            <td>{{$mgj->Pengaju->level}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#modalEditMengaju" class="btn btn-warning">Edit</a>
                                                <a href="/mengajukan/{{$mgj->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Di Hapus?')">Hapus</a>
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
@include('home.mengajukan.tambah')
@include('home.mengajukan.edit')


@endsection
