<?php 

namespace App\Http\Controllers\Dosen\monitoringskripsi;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\Auth;
// Tambahkan model yang ingin dipakai
use App\Skripsi;
use App\KBK;


class SkripsiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $AkunDosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'skripsi',
            'kbk' => KBK::all(),
            // Memanggil semua isi dari tabel biodata
            'dis' => DB::table('dosen_pembimbing')->where('nip_id',$AkunDosen)
            ->select('skripsi_id')
            ->groupBy('dosen_pembimbing.skripsi_id')
            ->get(),
            'dospem' => DB::table('dosen_pembimbing')->where('nip_id',$AkunDosen)
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('dosen_pembimbing.*','biodata_mhs.*','skripsi.*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.monitoring-skripsi.skripsi.index',$data);
    }

    public function show()
    {
        $AkunDosen = Auth::user()->username;
        $nim_id = Request::get('mhs');
        $data = [
        'page' => 'skripsi',
        'dis' => DB::table('dosen_pembimbing')->where('nip_id',$AkunDosen)
            ->select('skripsi_id')
            ->groupBy('dosen_pembimbing.skripsi_id')
            ->get(),
        'dropdown' => DB::table('dosen_pembimbing')->where('nip_id',$AkunDosen)
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('*')
            ->get(),
        'dospem' => DB::table('dosen_pembimbing')->where('nip_id',$AkunDosen)
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('*')
            ->where('skripsi.NIM_id','=',$nim_id)
            ->get(),
        'skripsi' => Skripsi::where('NIM_id',$nim_id)->first(),
        ];
        return view('dosen.monitoring-skripsi.skripsi.show',$data);

    }
}