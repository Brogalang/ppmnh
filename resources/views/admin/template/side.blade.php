<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    <h4 class="header text-center" style="color:white">Admin</h4>
    </div>
    <!-- search form -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="bg-black">
        <a href="{{url('/home')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="header">DATA CIVITAS AKADEMIKA</li>
    @if(Gate::check('isAdmin')|| Gate::check('isSuper_admin'))
    <li class="">
        <a href="{{url('/admin')}}">
            <i class="fa fa-user"></i>
            <span>Admin</span>
            <span class="">
                <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
            </span>
        </a>
        
    </li>
   
    <li class="">
        <a href="{{url('/guru')}}">
        <i class="fa fa-users"></i>
        <span>Guru</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    <!-- <li class="">
        <a href="{{url('/staf')}}">
        <i class="fa fa-users"></i>
        <span>Staff</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li> -->
    @endif
    @if(Gate::check('isBimbel')|| Gate::check('isSuper_admin')|| Gate::check('isAdmin'))
    <li class="">
        <a href="{{url('staf')}}">
        <i class="fa fa-sitemap"></i>
        <span>Metamorph</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    
    <li class="">
        <a href="{{url('/siswa')}}">
        <i class="fa fa-users"></i>
        <span>Santri</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
   @endif
   @if(Gate::check('isAdmin')|| Gate::check('isSuper_admin'))
    <li class="">
        <a href="{{url('/kelas')}}">
        <i class="fa fa-sitemap"></i>
        <span>Penerobos</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    
   <!--  <li class="">
        <a href="{{url('/mapel')}}">
        <i class="fa fa-book"></i>
        <span>Mata Pelajaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li> -->
    <!-- <li class="">
        <a href="{{url('/keuangan')}}">
        <i class="fa fa-money"></i>
        <span>Pembayaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li> -->
    <!-- <li class="">
        <a href="#">
        <i class="fa fa-book"></i>
        <span>Jam Pelajaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
    </li> -->
    <li class="header">DATA ABSENSI</li>
    <li class="treeview">
        <a href="#absen">
        <i class="fa fa-calendar"></i>
        <span>Absensi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul id="absen" class="treeview-menu">
        <li><a href="{{url('/absensiswasekolah')}}"><i class="fa fa-circle-o"></i> Santri</a></li>
        <li><a href="{{url('/absenstaf')}}"><i class="fa fa-circle-o"></i> Metamorph</a></li>
        <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li> -->
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-print"></i>
        <span>Laporan Absensi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('/absensiswasekolah/LaporanSiswaSekolah')}}"><i class="fa fa-circle-o"></i> Santri</a></li>
        <li><a href="{{url('/absenstaf/laporanAbsensiStaf')}}"><i class="fa fa-circle-o"></i> Metamorph</a></li>
        <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li> -->
        

        </ul>
    </li>
    </ul>
    @endif
</section>
<!-- /.sidebar -->
</aside>