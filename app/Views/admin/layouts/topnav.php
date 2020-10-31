
<a class="text-decoration-none text-white h3" href="/admin">
    PEF x OHU Administrator Panel                   
</a>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <?php
        if(logged_in()):
    ?>
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link h5 text-white dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                 $currentUser = user();
                 echo $currentUser->username;
                ?>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="/User/UserProfile">
                <i class="far fa-id-badge fa-sm fa-fw mr-2 text-gray-400"></i>
                Profil
            </a>
            <a class="dropdown-item" href="@LenIDSBaseUrl/Manage/ChangePassword" target="_blank">
                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                Ganti Password
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>                            
        </div>
    </li>
    <?php endif; ?>
</ul>
