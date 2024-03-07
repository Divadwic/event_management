@foreach($mengajukan as $mgj)
<form action="{{route('mengajukan.update', $mgj->id)}}" method="POST" enctype="multipart/form-data">
    {{method_field('patch')}}
    @csrf
    <div class="modal fade text-left" id="modalEditMengajukan" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit Data Mengajukan')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Pengaju </label>
                        <select name="id_pengaju" id="" class="form-control">
                            @foreach($pengaju as $pe)
                            <option value="{{$pe->id}}">{{$pe->nama_pengaju}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Judul Acara</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Masukan Email" required value="{{$mgj->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Acara</label>
                        <input type="date" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required value="{{$mgj->no_telp}}">
                    </div>
                    <div class="form-group">
                        <label for="">File Proposal</label>
                        <input type="file" class="form-control" name="level" id="" placeholder="Masukan Username" required value="{{$mgj->username}}">
                    </div>
                    <div class="form-group">
                        <label for="">Lampiran Peserta</label>
                        <input type="file" class="form-control" name="nama_instansi" id="" placeholder="Masukan Password" required value="{{$mgj->password}}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kegiatan</label>
                        <select name="id_jeniskegiatan" id="" class="form-control">
                            @foreach($jeniskegiatan as $jk)
                            <option value="{{$jk->id}}">{{$jk->jenis_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Level Kegiatan</label>
                        <select name="id_jeniskegiatan" id="" class="form-control">
                            @foreach($jeniskegiatan as $jk)
                            <option value="{{$jk->id}}">{{$jk->level_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <select name="id_pengaju" id="" class="form-control">
                            @foreach($pengaju as $pe)
                            <option value="{{$pe->id}}">{{$pe->level}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <a class="btn grey btn-outline-secondary" href="{{ route('home.mengajukan.index')}}">{{__('Back')}}</a>
                        <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endforeach
