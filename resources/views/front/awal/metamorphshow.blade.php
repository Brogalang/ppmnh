@extends('front.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Santri Baru</h3>
                <!-- <a href="{{route('staf/cetak_profil_pdf', $staf->nip_staf)}}" class="btn btn-primary pull-right" target="_blank">CETAK PDF</a> -->
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="site-section bg-red">
                <div class="container">
                <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1" style="padding-top:20px">
                    @if(is_null($staf->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 300px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 300px"  src="{{asset('images/file/'.$staf->image)}}"></td>
                    @endif
                </div> 
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>ID</th>
                    <td>{{$staf->nip_staf}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$staf->nama_staf}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$staf->alamat_staf}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$staf->tempat_lahir_staf}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$staf->tgl_lahir_staf}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$staf->no_telp_staf}}</td>   
                </tr>
                <tr>
                    <th>Persentase Hadir</th>
                    <td>{{$hadirPersen}}%</td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>

            </div>
            <center>
            <div class="button" style="margin-right:10px;">
                <a href="{{route('absen_metamorph')}}" class="btn btn-success pull-right">Absensi</a>
            </div>
            </center>
            
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection