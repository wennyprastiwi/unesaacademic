<li class="treeview">
    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

            <li
                  @if($page == 'download-dokumen')
                  {!! 'class="active"'!!}
                  @endif
                  > <a href="{{url('dosen/Download_Dokumen')}}"><i class="fa fa-file-text"></i>Shared Dokumen</a>
                  </li>

            <li
            @if($page == 'kalender-ruang')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/Kalender_Ruang') }}"><i class="fa fa-calendar" aria-hidden="true"></i>Kalender Ruang</a>

            </li>

            <li
            @if($page == 'memohon-ruangan')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/memohon-ruangan') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Memohon Ruangan</a>
            </li>

            <li
            @if($page == 'surat-masuk')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/surat-masuk') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

            </li>

            <li
            @if($page == 'surat-keluar-dosen')
            {!! 'class="active"'!!}
             @endif
            >
            <a href="{{ url('dosen/surat-keluar-dosen') }}"><i class='fa fa-envelope'></i> <span>Surat Keluar</span></a>

            </li>
      </ul>
</li>

<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="{{ url('undangandosen') }}"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href=""><i class='fa fa-book'></i> <span>Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            
            <a href="{{url('notulensi/konfirmasi') }}"><i class='fa fa-book'></i> <span>Konfirmasi Hasil</span></a></li>
            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{url('notulensi/listhasil') }}"><i class='fa fa-book'></i> <span>List Hasil</span></a>
            </li></ul>
            <a href="{{url('dosen/notulensidosen/kalenderRapat') }}"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </ul>
            </li>
            <!-- Monitoring Skripsi -->
<li>
      <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-id-card'></i><span> Data Skripsi</span></a>
            </li>

            <li
            @if($page == 'konsultasi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/konsultasi') }}"><i class='fa fa-handshake-o'></i><span> Konsultasi</span></a>
            </li>

            <li
            @if($page == 'berkas')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/berkas') }}"><i class='fa fa-file-word-o '></i><span> Berkas</span></a>
            </li>

            <li
              @if($page == 'jadwal-sidang')
              {!! 'class="active"'!!}
              @endif
              >
              <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
              
              <ul class="treeview-menu">
                
              <li
              @if($page == 'manage-jadwal-sidang-proposal')
              {!! 'claass="active"'!!}
              @endif>
              <a href="{{url('dosen/monitoring-skripsi/view-jadwal-sidang-proposal-dosen')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Proposal</span>
              </a>
              </li>

              <li
              @if($page == 'manage-jadwal-sidang-skripsi')
              {!! 'claass="active"'!!}
              @endif>
              <a href="{{url('dosen/monitoring-skripsi/view-jadwal-sidang-skripsi-dosen')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Skripsi</span>
              </a> 
              </li>


              </ul>
            </li>

              <li
              @if($page == 'hasil-sidang')
              {!! 'class="active"'!!}
              @endif
              >
              <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>Hasil Sidang</a>
              
              <ul class="treeview-menu">
                
              <li
              @if($page == 'manage-hasil-sidang-proposal')
              {!! 'claass="active"'!!}
              @endif>
              <a href="{{url('dosen/monitoring-skripsi/view-hasil-sidang-proposal-dosen')}}"><i class='fa fa-circle-o'></i><span>Hasil Proposal </span>
              </a>
              </li>

              <li
              @if($page == 'manage-hasil-sidang-skripsi')
              {!! 'claass="active"'!!}
              @endif>
              <a href="{{url('dosen/monitoring-skripsi/view-hasil-sidang-skripsi-dosen')}}"><i class='fa fa-circle-o'></i><span>Hasil Skripsi </span>
              </a>
              </li>


              </ul>
              </li>
      </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->

<!-- Akhir modul krs khs -->