<nav class='navbar navbar-dark navbar-expand-lg bg-dark p-0 m-0'>
  <div class="container-fluid p-0 m-0">
    <div id='nav-container'>
      <a class='navbar-brand' href='A_home.php' title='logo'>PEERS</a>

      <form class='form-inline' action='A_profile.php' method='GET' id='searchform'>
        <div class='input-group'>
          <input class='form-control bg-dark text-light' type='search' name='profile_username' placeholder='Search' aria-label='Search'>
          <div class='input-group-append'><button type='submit' class='btn btn-light input-group-text rounded-right' id='searchglass'>  <i class='fa-solid fa-magnifying-glass p-1'></i></button></div>
        </div>
      </form>

      <div id='navbtn-container'>
        <ul class='navbar-nav d-flex flex-row'>

          {$postButton}

          <ul class="navbar-nav">
            <li class="nav-item dropdown me-1">
              <a href='#' class='d-block nav-link active text-white position-relative' title='Create post' id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-group fa-xl"></i>

                {$nUnsolvedFriendRequests}
                
              </a>

              <ul id="fiendRequests" class="dropdown-menu dropdown-menu-lg-start p-2" aria-labelledby="navbarDarkDropdownMenuLink">
                {$friendRequests}
              </ul>
            </li>
          </ul>


          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href='#' class='nav-link active text-white' title='Create post' id="navbarProfilePic" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src='{$profilePic}' alt='' width='28' height='28' class='rounded-circle d-block'>
              </a>

              <ul class="dropdown-menu dropdown-menu-lg-start" aria-labelledby="navbarProfilePic">

                  <a href='A_profile.php?profile_username={$username}' class='dropdown-item'>My profile</a>
                  <form action='Z_uitloggen.php' method='POST'>
                    <input type='submit' value='Log out {$fullName}' name='submit' class='dropdown-item' ></a>
                  </form>

              </ul>
            </li>
          </ul>

        </ul>
      </div>
    </div>
  </div>
</nav>