@extends('front.template.base')
@section('content')
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Data Santri</h2>
          </div>
        </div>
    <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>foto</th>
                    <th>Nama</th>
                    <th>Penerobos</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tindakan</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>
                
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$nomer}}</td>

                    <td>{{ $siswa->nis}}</td>
                    @if(is_null($siswa->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$siswa->image)}}"></td>
                    @endif
                    <td>{{ $siswa->nama_siswa}}</td>
                    @if(!is_null($siswa->id_kelas)){
                        <td>{{ $siswa-> kelas-> kode_kelas}} - {{ $siswa->kelas->nama}}</td>
                    }
                    @else{
                        <td> - </td>
                    }
                    @endif
                    <td>{{ $siswa->tmpt_lahir}}</td>
                    <td>{{ $siswa->tgl_lahir}}</td>
                    <td>{{ $siswa->jk_siswa}}</td>
                    <td>{{ $siswa->alamat_siswa}}</td>
                    <td>
                    <a href="{{url('/siswa/'.$siswa->nis)}}" class="btn btn-sm btn-primary">Lihat Profil</a>
                    </td>

                    <?php $nomer++; ?>
                </tr>
                @endforeach
				</tbody>
              </table>
            </div>
          </div>
        </div>
@endsection