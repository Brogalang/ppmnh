@extends('front.template.base')
@section('content')
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Data Absen Santri</h2>
          </div>
        </div>
    <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Status Absen</th>
                    <th>Tangal/date</th>
                    <th>Pertemuan</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>
                @foreach ($users as $staf)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $staf->nip_staf}}</td>
                    <td>{{ $staf->absen_staf}}</td>
                    <td>{{ $staf->tgl_absen_staf}}</td>
                    <td>{{ $staf->pertemuan}}</td>
                    <td>{{ $staf->keterangan_staf}}</td>
            
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
              </table>
              <center>
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                </center>
            </div>
          </div>
        </div>
@endsection