@extends('layouts.main')

@section('container')

    <div class="col-lg-8 mb-3 justify-content-center flex-wrap flex-md-nowrap align-items-center row pb-2 row border-bottom">
        <h1>Formulir Pendaftaran</h1>
    </div>
    <div class="col-lg-8 d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center row pb-2 row border-bottom">
        <form method="post" action="/psb/formulir" class="mb-5 d-block" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-sm-4 mx-4">
                <h2>Data Calon Siswa</h2>
            <div class="row">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    required autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    required value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik"
                    required value="{{ old('nik') }}">
                @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    required value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                    required value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="row">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select" name="agama">
                        <option value="islam">Islam</option>
                        <option value="katholik">Katholik</option>
                        <option value="protestan">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghocu">Konghocu</option>
                  </select>
            </div>
            </div>
        <div class="col-sm-4 mx-4">
                <h2>Data Orang Tua</h2>
                <div class="row">
                    <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                    <input type="text" name="nama_ortu" class="form-control @error('nama_ortu') is-invalid @enderror" id="nama_ortu"
                        required value="{{ old('nama_ortu') }}">
                    @error('nama_ortu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="alamat_ortu" class="form-label">Alamat Orang Tua</label>
                    <textarea name="alamat_ortu" class="form-control @error('alamat_ortu') is-invalid @enderror" id="alamat_ortu"
                        required value="{{ old('alamat_ortu') }}"></textarea>
                    @error('alamat_ortu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="phone_ortu" class="form-label">Nomor Telepon Orang Tua</label>
                    <input type="text" name="phone_ortu" class="form-control @error('phone_ortu') is-invalid @enderror" id="phone_ortu"
                        required value="{{ old('phone_ortu') }}">
                    @error('phone_ortu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mx-4">
                <h2>Latar Belakang Pendidikan</h2>
                <div class="row">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                        required value="{{ old('asal_sekolah') }}">
                    @error('asal_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
                    <textarea name="alamat_sekolah" class="form-control @error('alamat_sekolah') is-invalid @enderror" id="alamat_sekolah"
                        required value="{{ old('alamat_sekolah') }}"></textarea>
                    @error('alamat_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="provinsi_sekolah" class="form-label">Provinsi Sekolah</label>
                    <input type="text" name="provinsi_sekolah" class="form-control @error('provinsi_sekolah') is-invalid @enderror" id="provinsi_sekolah"
                        required value="{{ old('provinsi_sekolah') }}">
                    @error('provinsi_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="kabupaten_sekolah" class="form-label">Kabupaten Sekolah</label>
                    <input type="text" name="kabupaten_sekolah" class="form-control @error('kabupaten_sekolah') is-invalid @enderror" id="kabupaten_sekolah"
                        required value="{{ old('kabupaten_sekolah') }}">
                    @error('kabupaten_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <label for="phone_sekolah" class="form-label">Nomor Telepon Sekolah</label>
                    <input type="text" name="phone_sekolah" class="form-control @error('phone_sekolah') is-invalid @enderror" id="phone_sekolah"
                        required value="{{ old('phone_sekolah') }}">
                    @error('phone_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4 mx-4">
                <h2>Paket Keahlian</h2>
                <div class="row">
                    <label for="keahlian1" class="form-label">Pilihan Pertama</label>
                    <select class="form-select" name="keahlian1">
                            <option value="mm">Multimedia</option>
                            <option value="tkr">Teknik Kendaraan Ringan</option>
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                            <option value="tkj">Teknik Komputer Jaringan</option>
                            <option value="tsm">Teknik Sepeda Motor</option>
                            <option value="tav">Teknik Audio Video</option>
                      </select>
                </div>
                <div class="row">
                    <label for="keahlian2" class="form-label">Pilihan Kedua</label>
                    <select class="form-select" name="keahlian2">
                        <option value="mm">Multimedia</option>
                        <option value="tkr">Teknik Kendaraan Ringan</option>
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                        <option value="tkj">Teknik Komputer Jaringan</option>
                        <option value="tsm">Teknik Sepeda Motor</option>
                        <option value="tav">Teknik Audio Video</option>
                      </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mx-4">
                <h2>Dokumen</h2>
            <div class="row">
                <label for="pas_foto" class="form-label @error('pas_foto') is-invalid @enderror row">Pas Foto 3x4 
                    <span class="text-danger">*jpg</span></label>
                <input class="form-control" type="file" id="pas_foto" name="pas_foto">
                @error('pas_foto')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="row">
                <label for="akta" class="form-label @error('akta') is-invalid @enderror row">Akta Kelahiran 
                    <span class="text-danger">*pdf</span></label>
                <input class="form-control" type="file" id="akta" name="akta">
                @error('akta')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="row">
                <label for="piagam" class="form-label @error('piagam') is-invalid @enderror row">Piagam Dijadikan 1
                    <span class="text-danger">*pdf</span></label>
                <input class="form-control" type="file" id="piagam" name="piagam">
                @error('piagam')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="col-sm-4">
              <h2 class="mb-2 mt-2">Nilai</h2>
              <div class="row">
                <label for="nilai" class="form-label @error('nilai') is-invalid @enderror row">Scan Nilai Akhir
                    <span class="text-danger">*pdf</span></label>
                <input class="form-control" type="file" id="nilai" name="nilai">
                @error('nilai')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
    </div>
        </form>
    </div>
</div>
    
@endsection