<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{request()->is('dashboard') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('user') ? 'active' : ''}} ">
            <a class="nav-link" href="{{url('user') }}">
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('produk') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('produk') }}">
              <i class="material-icons">Product</i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('kategori') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('kategori') }}">
              <i class="material-icons">category</i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('pelanggan') ? 'active' : ''}} ">
            <a class="nav-link " href="{{ url('pelanggan') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>