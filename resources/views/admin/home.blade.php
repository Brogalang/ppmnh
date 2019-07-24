@extends('admin.template.base')
@section('content')
<section class="content-header">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">
    <div class="col-xs-12" style="padding-top:50px">
        <div class="row">
            <a href="{{url('kelas')}}">
                <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-users"></i>

                            <h3 class="box-title">Penerobos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body text-center">
                        <i class="fa fa-users" style="font-size:100px"></i>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <p style="font-size:20px">Data Penerobos PPMNH</p>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </a>
            <!-- /.col -->

            <a href="{{url('guru')}}">
                <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-users"></i>

                            <h3 class="box-title">Guru</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body text-center">
                        <i class="fa fa-book" style="font-size:100px"></i>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <p style="font-size:20px">Data Guru PPMNH</p>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </a>
                <!-- /.col -->

            <a href="{{url('siswa')}}">
                <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-users"></i>

                            <h3 class="box-title">Santri</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body text-center">
                        <i class="fa fa-users" style="font-size:100px"></i>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <p style="font-size:20px">Data Santri PPM NH</p>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </a>
                <!-- /.col -->

        </div>
<!-- /.row -->
    </div>
</section>
@endsection