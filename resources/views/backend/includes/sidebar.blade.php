    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Admin <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Admin Area</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Movie Origin</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ Route('createorigin') }}" class="sub-link">Add Origin</a></li>
            <li class="sub-item"><a href="{{ Route('manageorigin') }}" class="sub-link">Manage Origin</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Movies</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ Route('createmovie') }}" class="sub-link">Add Movie</a></li>
            <li class="sub-item"><a href="{{ Route('managemovie') }}" class="sub-link">Manage Movie</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->


      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->