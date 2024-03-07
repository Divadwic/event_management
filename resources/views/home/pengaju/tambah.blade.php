<form action="{{route('pengaju.simpan')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="modalTambahPengaju" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Tambah Pengaju Baru')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Pengaju</label>
                        <input type="text" class="form-control" name="nama_pengaju" id="" placeholder="Masukan Nama Pengaju" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <input type="text" class="form-control" name="level" id="" placeholder="Masukan Level atau status Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Instansi</label>
                        <input type="text" class="form-control" name="nama_instansi" id="" placeholder="Masukan Nama Perusahaan/ kelas Anda" required>
                    </div>
                    <div>
                        <a class="btn grey btn-outline-secondary" href="{{ route('home.pengaju.index')}}">{{__('Back')}}</a>
                        <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>