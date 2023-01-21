<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        @can('verified')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/cetakkartu*') ? 'active' : ''}}" href="/dashboard/cetakkartu">
              <span data-feather="file-text"></span>
              Cetak Kartu Test
            </a>
          </li>
        @endcan
        @can('registrar')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cekdokumen*') ? 'active' : ''}}" href="/dashboard/cekdokumen">
            <span data-feather="file-text"></span>
            Cek Dokumen
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cekstatus*') ? 'active' : ''}}" href="/dashboard/cekstatus">
            <span data-feather="file-text"></span>
            Cek Status
          </a>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Postingan
          </a>
        </li>
      </ul>
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4  mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/event*') ? 'active' : ''}}" href="/dashboard/event">
            <span data-feather="award"></span>
            Event
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Post Category
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/managepsb*') ? 'active' : ''}}" href="/dashboard/managepsb">
            <span data-feather="book"></span>
            Manage PSB
          </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>