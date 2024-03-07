@foreach($admin as $adm)
<form action="{{route('admin.update', $adm->id)}}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="nama_admin" id="" placeholder="Masukan Nama" required  value="{{$adm->nama_admin}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Masukan Email" required value="{{$adm->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required value="{{$adm->no_telp}}">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="" placeholder="Masukan Username" required value="{{$adm->username}}">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="Masukan Password" required value="{{$adm->password}}">
                    </div>
                    <div>
                        <a class="btn grey btn-outline-secondary" href="{{ route('home.admin.index')}}">{{__('Back')}}</a>
                        <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endforeach
