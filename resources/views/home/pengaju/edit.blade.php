@foreach($pengaju as $pnj)
<form action="{{route('admin.update', $pnj->id)}}" method="POST" enctype="multipart/form-data">
    {{method_field('patch')}}
    @csrf
    <div class="modal fade text-left" id="modalEditAdmin" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit Data Admin')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Admin</label>
                        <input type="text" class="form-control" name="nama_pengaju" id="" placeholder="Masukan Nama" required  value="{{$pnj->nama_pengaju}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Masukan Email" required value="{{$pnj->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required value="{{$pnj->no_telp}}">
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <input type="text" class="form-control" name="level" id="" placeholder="Masukan Username" required value="{{$pnj->username}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Instansi</label>
                        <input type="password" class="form-control" name="nama_instansi" id="" placeholder="Masukan Password" required value="{{$pnj->password}}">
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

@endforeach
