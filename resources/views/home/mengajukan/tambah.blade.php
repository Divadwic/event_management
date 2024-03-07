<form action="{{route('mengajukan.simpan')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="modalTambahMengaju" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Mengajukan Baru')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Pengaju</label>
                        <select name="id_pengaju" id="" class="form-control">
                            @foreach($pengaju as $pe)
                            <option value="{{$pe->id}}">{{$pe->nama_pengaju}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Judul Acara</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Acara</label>
                        <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="">File Proposal</label>
                        <input type="file" class="form-control" name="username" id="" placeholder="Masukan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Lampiran Peserta</label>
                        <input type="file" class="form-control" name="password" id="" placeholder="Masukan Password" required>
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