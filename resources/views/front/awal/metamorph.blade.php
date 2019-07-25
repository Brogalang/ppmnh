@extends('front.template.base')
@section('content')
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Data Santri Baru</h2>
          </div>
        </div>
    <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					<th>No</th>
					<th>ID</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Universitas</th>
					<th>Button</th>
				  </tr>
                </thead>
                <tbody>
						<?php $nomer = 1; ?>

		                @foreach ($staf as $row)
		                <tr>
		                    <td>{{$nomer}}</td>
		                    <td>{{ $row->nip_staf}}</td>
		                    @if(is_null($row->image))
		                        <td>
		                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
		                        </td>
		                    @else
		                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$row->image)}}"></td>
		                    @endif
		                    <td>{{ $row->nama_staf}}</td>
		                    <td>{{ $row->alamat_staf}}</td>
		                    <td>{{ $row->univ_staf}}</td>
		                    <?php $nomer++; ?>
		                    <td><a href="{{route('showMetamorph', $row->nip_staf)}}" class="btn btn-sm btn-info">Lihat Profil</a></td>
		                </tr>

		                @endforeach
				</tbody>
              </table>
            </div>
          </div>
        </div>
 @endsection