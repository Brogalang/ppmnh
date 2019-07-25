<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\AbsenStaf;
use App\Staf;

class AbsenStafController extends Controller
{
	// public function __construct(Guru $guru, AbsensiGuru $absensiguru)
 //    {
 //        $this->guru = $guru;
 //        $this->absensiguru = $absensiguru;
 //    }

    public function index()
    {
        $staf = DB::table('staf')->get();
        $absenstaf= DB::table('absenstaf')->get();

        return view('/admin/absensi/staf', ['staf' => $staf]);
    }

    public function store()
    {
        $staf = new AbsenStaf;

        if (is_null($staf->absen_staf = request('nip_staf'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('nip_staf'));

			$nip_staf = request('nip_staf');
			date_default_timezone_set("Asia/Bangkok");
			// $tgl_absen_staf = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
			    $staf = new AbsenStaf;
				$staf->nip_staf = $nip_staf[$i];
		        $staf->absen_staf = request('absen_staf');
		        $staf->pertemuan = request('pertemuan');
		        $staf->keterangan_staf = request('keterangan_staf');
		        $staf->tgl_absen_staf = request('tgl_absen');
		        $staf->save();
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect('/absenstaf');
		}
    }

        public function show()
    {
     	$users = DB::table('absenstaf')
		->join('staf', 'absenstaf.nip_staf', '=', 'staf.nip_staf')
		->select('absenstaf.*', 'staf.nama_staf')
		->get();
   
       return view('admin.absensi.laporanStaf',['users'=>$users]);
    }

    public function metamorph()
    {
    	// $query  = "SELECT * FROM contacts WHERE contact_id='$id' and user_id='1'";

     	$users = DB::table('absenstaf')
		->join('staf', 'absenstaf.nip_staf', '=', 'staf.nip_staf')
		->select('absenstaf.*', 'staf.nama_staf')
		->get();
   
       return view('front.awal.metamorphabsen',['users'=>$users]);
    }

    public function showMetamorph(Staf $nip_staf)
    {
        if((DB::table('absenstaf')->select(DB::raw('count(*) as absen_count'))->where('nip_staf','=',$nip_staf->nip_staf)->value('absen_count'))>0){
            $hadirMax = DB::table('absenstaf')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where('nip_staf','=',$nip_staf->nip_staf)
                         ->value('absen_count');
            // return $hadirMax;
            $hadirlist = DB::table('absenstaf')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where([
                            ['absen_staf', '=', 'hadir'],
                            ['nip_staf', '=', $nip_staf->nip_staf]
                        ])
                         // ->groupBy('status')
                         ->value('absen_count');
            $hadirPersen = ($hadirlist/$hadirMax)*100; 
        }
        else{
            $hadirPersen = 0;
        }

        $staf= DB::table('absenstaf')->get();

        return view('front.awal.metamorphshow', ['staf' => $nip_staf], ['hadirPersen' => $hadirPersen]);
    }

}
