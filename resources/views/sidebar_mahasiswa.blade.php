<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/biodata-mahasiswa') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Biodata Mahasiswa</a>
</li>
<li
@if($page == 'penelitian')
{!! 'class="active"'!!}
@endif
>
<!-- Href menuju ke url mahasiswa/biodata -->
<a href="{{ url('/mahasiswa/penelitian') }}"><i class='fa fa-book'></i>Penelitian</a>
</li>
<li
@if($page == 'prestasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/prestasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Prestasi</a>
</li>
<li
@if($page == 'ganti-password')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/ganti-password') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Ubah Password</a>
</li>
<li class="treeview"
@if($page == 'download-dokumen' || $page =='kalender-ruang' || $page == 'memohon-ruangan' || $page == 'surat-masuk' || $page == 'surat-keluar-mhs')
{!! 'active' !!}
@endif

>

    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

    <li
      @if($page == 'download-dokumen')
      {!! 'class="active"'!!}
      @endif
      > <a href="{{url('mahasiswa/Download_Dokumen')}}"><i class="fa fa-file-text"></i>Shared Dokumen</a>
    </li>

    <li
    @if($page == 'memohon-ruangan')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/memohon-ruangan') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Memohon Ruangan</a>

    </li>

    <li
    @if($page == 'surat-masuk')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/surat-masuk') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

    </li>

    <li
    @if($page == 'surat-keluar-mhs')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/surat-keluar-mhs') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Keluar</a>

    </li>
</ul>
</li>
<!-- Monitoring SKripsi -->
	<li>
        <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
        <ul class="treeview-menu">

        	<li
        	@if($page == 'form_usulan')
        	{!! 'class="active"'!!}
        	@endif>

        	<a href="{{ url('mahasiswa/monitoring-skripsi/form_usulan') }}"><i class='fa fa-file-word-o'></i><span> Form Usulan</span></a>
        	</li>

			<li
			@if($page == 'skripsi')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/skripsi') }}"><i class='fa fa-id-card'></i><span> Data Skripsi</span></a>
			</li>

			<li
			@if($page == 'konsultasi')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/konsultasi') }}"><i class='fa fa-handshake-o'></i><span> Konsultasi</span></a>
			</li>

			<li
			@if($page == 'upload_berkas')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/upload_berkas') }}"><i class='fa fa-upload'></i><span>Upload Berkas</span></a>
			</li>

			<li
			@if($page == 'jadwal-sidang')
			{!! 'class="active"'!!}
			@endif
			>
			<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
			
			<ul class="treeview-menu">
				
				<li
				@if($page == 'jadwal-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-jadwal-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a>
				</li>

				<li
				@if($page == 'jadwal-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-jadwal-sidang-skripsi-mahasiswa') }}"><i class="fa fa-circle-o"></i>Skripsi</a>
				</li>


			</ul>
			</li>

			<li
			@if($page == 'hasil-sidang')
			{!! 'class="active"'!!}
			@endif
			>
			<a href=""><i class="fa fa-certificate" aria-hidden="true"></i>Hasil Sidang</a>
			
			<ul class="treeview-menu">
				
				<li
				@if($page == 'hasil-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a>
				</li>

				<li
				@if($page == 'hasil-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-skripsi-mahasiswa') }}"><i class="fa fa-circle-o"></i>Skripsi</a>
				</li>


			</ul>
			</li>

			
			</ul>
			</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->