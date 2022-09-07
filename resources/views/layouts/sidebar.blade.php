  <li class="pt-2 pb-1">
      <span class="nav-item-head">Menu</span>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="index.html">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-master" aria-expanded="false" aria-controls="ui-master">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span class="menu-title">Master</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-master">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('periods.index') }}">Data Periode</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('lessons.index') }}">Mata Pelajaran</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('classes.index') }}">Data Kelas</a>
              </li>
          </ul>
      </div>
  </li>
  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-siswa" aria-expanded="false" aria-controls="ui-siswa">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Kesiswaan</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-siswa">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('students.index') }}">Data Induk Siswa</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Leger</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Data Siswa Mutasi</a>
              </li>
          </ul>
      </div>
  </li>
  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-pegawai" aria-expanded="false" aria-controls="ui-pegawai">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Kepegawaian</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-pegawai">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('employees.index') }}">Data Induk Pegawai</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
              </li>
          </ul>
      </div>
  </li>
  {{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('students.index') }}">
      <i class="mdi mdi-contacts menu-icon"></i>
      <span class="menu-title">Data Siswa</span>
    </a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('classes.index') }}">
      <i class="mdi mdi-format-list-bulleted menu-icon"></i>
      <span class="menu-title">Data Kelas</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/charts/chartjs.html">
      <i class="mdi mdi-chart-bar menu-icon"></i>
      <span class="menu-title">Leger</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/tables/basic-table.html">
      <i class="mdi mdi-table-large menu-icon"></i>
      <span class="menu-title">Data Siswa Mutasi</span>
    </a>
  </li> --}}
