@extends('admin.layout.app')

@section('content')
<div class="main-content"> 
    <section class="section">
      <div class="section-header">
        <h1>Tambah Sekolah</h1>
      </div>

      <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4 class="text-dark">Form Tambah Sekolah</h4>
            </div>
            <div class="card-body">
               <form action="{{ route('sekolah.store') }}" method="POST">
                @csrf
                 <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama_sekolah">Nama Sekolah</label>
                            <input type="text" class="form-control" id="nama_sekolah"
                            placeholder="Masukkan nama sekolah" name="nama_sekolah">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                            placeholder="Masukkan email sekolah" name="email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="no_hp">Telepon</label>
                            <input type="text" class="form-control" id="no_hp"
                            placeholder="Masukkan telepon sekolah" name="no_hp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat"
                            placeholder="Masukkan alamat sekolah" name="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
               </form>
            </div>
        </div>
      </div>
      
    </section>
</div>
@endsection