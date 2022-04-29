  @php
      $setting = \App\Models\SiteSetting::first();
  @endphp
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      @if (!empty($setting->logo))
        <img src="{{asset('admin/image/'.$setting->logo)}}" alt="{{$setting->title}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      @endif
      @if (!empty($setting->title))
        <span class="brand-text font-weight-light">{{$setting->title}}</span>
      @endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" id="myInput">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="myUL">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> --}}
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ Route::is('social','settings.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Frontend Settings
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('social')}}" class="nav-link {{ Route::is('social') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('settings.index')}}" class="nav-link {{ Route::is('settings.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Settings</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Route::is('users.index','users.create','users.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{Route::is('users.index') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link {{Route::is('users.create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- @can('role-create')
          <li class="nav-item">
            <a href="#" class="nav-link @if(request()->is('roles'))  active @elseif(request()->is('permissions')) active @endif">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>
                Roles & Permissions
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link {{request()->is('roles') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              @can('role-create')
              <li class="nav-item">
                <a href="{{route('permissions.index')}}" class="nav-link {{request()->is('permissions') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Products
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('sliders.index')}}" class="nav-link {{ Route::is('sliders.index','sliders.create','sliders.edit') ? 'active' : '' }}">
              {{-- <i class="nav-icon fa-solid fa-images"></i> --}}
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sliders
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('banners.index')}}" class="nav-link {{ Route::is('banners.index','banners.create','banners.edit') ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Banner
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('steps.index')}}" class="nav-link {{ Route::is('steps.index','steps.create','steps.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Steps
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('programs.index')}}" class="nav-link {{ Route::is('programs.index','programs.create','programs.edit','programs.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Programs
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          
          {{-- <li class="nav-item">
            <a href="{{route('testimonials.index')}}" class="nav-link {{ Route::is('testimonials.index','testimonials.create','testimonials.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Testimonials
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{route('teams.index')}}" class="nav-link {{ Route::is('teams.index','teams.create','teams.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teams
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('events.index')}}" class="nav-link {{ Route::is('events.index','events.create','events.edit','events.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Events
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('medias.index')}}" class="nav-link {{ Route::is('medias.index','medias.create','medias.edit','medias.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Media Coverage
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('gallery.index')}}" class="nav-link {{ Route::is('gallery.index','gallery.create','gallery.edit','gallery.show') ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('pages.index')}}" class="nav-link {{ Route::is('pages.index','pages.create','pages.edit','pages.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Custom Pages
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('newsletters.index')}}" class="nav-link {{ Route::is('newsletters.index','newsletters.send') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Newsletter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('messages.index')}}" class="nav-link {{ Route::is('messages.index','messages.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('job.index')}}" class="nav-link {{ Route::is('job.index','job.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Job Vacancy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('volunteer.index')}}" class="nav-link {{ Route::is('volunteer.index','volunteer.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Volunteer Internship
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('opportunity.index')}}" class="nav-link {{ Route::is('opportunity.index','opportunity.show') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Opportunity
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>