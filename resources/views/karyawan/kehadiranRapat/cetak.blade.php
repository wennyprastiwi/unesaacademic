<!DOCTYPE html>
<html>
<head>
<title>
         
    </title>
</head>
<body>
<img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Unesa.png" alt="logo" style="float:left;width:120px;height:120px;">
<strong>&nbsp; UNIVERSITAS NEGERI SURABAYA</strong>
<br>&nbsp; Jalan Ketintang, Ketintang, Kecamatan Gayungan, Kota SBY, Jawa Timur, 60231
<br>&nbsp; Telp. (031) 8280009
<br>&nbsp; https://www.unesa.ac.id
<br>___________________________________________________________________________________________________________
<b></b>
<p>
<h2 align="center">DAFTAR PESERTA RAPAT</h2>
@forelse($rapat as $a => $b)
<p> Nama : {{$b->nama_rapat}} </p>
<p> Tempat : {{$b->nama_ruang}}</p>
<p> Tanggal : {{$b->waktu_pelaksanaan}}</p>
@empty
@endforelse
<br>
<table style="width:100%; border: 1px solid black;">
    <thead>
        <th style="text-align:center; border: 1px solid black">No</th>
        <th style="text-align:center; border: 1px solid black">Nama Dosen</th> 
        <th style="text-align:center; border: 1px solid black">TTD</th>
    </thead>
    <tbody>
    @forelse($dosen as $i => $o)
    <tr>
        <td style="text-align:center; border: 1px solid black">{{$i+1}}</td>
        <td style="text-align:center; border: 1px solid black">{{$o->nama_dosen}}</td>
        <td style="text-align:center; border: 1px solid black"></td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
<br>
<footer>
  <p align="right">Surabaya, {{App\Helpers\GeneralHelper::indonesianDateFormat($b->waktu_pelaksanaan)}}</p>
  <br>
  <br>
  <br>


  <p align="right">{{$o->nama_dosen}}</p>
</footer>

</body>
</html>-->
