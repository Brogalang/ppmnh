@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Staf</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/absenstaf">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="tanggal" class="form-control-label">Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen" required>
                    </div>
                </div>
                <!-- /.input group -->
            <!-- </div> -->
<!-- /.box-header -->
            
            <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="pertemuan">
                            <option value="Subuh">Subuh</option>
                            <option value="Pagi 1">Pagi 1</option>
                            <option value="Pagi 2">Pagi 2</option>
                            <option value="Siang">Siang</option>
                            <option value="Malam">Malam</option>
                        </select>
                    </div>
                </div>    

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $nomer = 1; ?>
                <?php $getid = array(); ?>
                @foreach ($staf as $row)
                <tr>
                <?php $getid[$nomer] = $row->nip_staf; ?>
                    <td>{{$nomer}}</td>
                    <td>{{$row->nip_staf}}</td>
                    <td>{{$row->nama_staf}}</td>
                    <td><input type = "checkbox" name = "nip_staf[]" value = "{{$getid[$nomer]}}"/></td>
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </tfoot>

                </table>
                <br>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Hadir</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                        <th>Izin</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="absen_staf" value="hadir" required></td>
                        <td><input type="radio" name="absen_staf" value="sakit"></td>
                        <td><input type="radio" name="absen_staf" value="alfa"></td>
                        <td><input type="radio" name="absen_staf" value="izin"></td>
                        <td><input name="keterangan_staf" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                    </tr>
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
        </div>
    </div>
</form>
</section>
@endsection