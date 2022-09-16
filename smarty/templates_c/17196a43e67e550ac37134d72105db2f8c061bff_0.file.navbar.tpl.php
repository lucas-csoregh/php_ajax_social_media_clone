<?php
/* Smarty version 3.1.31, created on 2022-06-05 14:31:16
  from "C:\wamp64\www\school\webapplicaties\eindwerk\9_social\smarty\templates\page_parts\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_629cbe3499c312_23745918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17196a43e67e550ac37134d72105db2f8c061bff' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\9_social\\smarty\\templates\\page_parts\\navbar.tpl',
      1 => 1654439462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cbe3499c312_23745918 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

          <?php echo $_smarty_tpl->tpl_vars['postButton']->value;?>


          <ul class="navbar-nav">
            <li class="nav-item dropdown me-1">
              <a href='#' class='d-block nav-link active text-white position-relative' title='Create post' id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-group fa-xl"></i>

                <span style="transform: scale(0.8);" class="position-absolute bottom-0 end-0 translate-end badge rounded-pill bg-danger">
                  <span id="nFriendRequests"><?php echo $_smarty_tpl->tpl_vars['nUnsolvedFriendRequests']->value;?>
</span>
                  <span class="visually-hidden">Friend requests</span>
                </span>
              </a>

              <ul id="fiendRequests" class="dropdown-menu dropdown-menu-lg-start p-2" aria-labelledby="navbarDarkDropdownMenuLink">
                <?php echo $_smarty_tpl->tpl_vars['friendRequests']->value;?>

              </ul>
            </li>
          </ul>


          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href='#' class='nav-link active text-white' title='Create post' id="navbarProfilePic" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src='<?php echo $_smarty_tpl->tpl_vars['profilePic']->value;?>
' alt='' width='28' height='28' class='rounded-circle d-block'>
              </a>

              <ul class="dropdown-menu dropdown-menu-lg-start" aria-labelledby="navbarProfilePic">

                  <a href='A_profile.php?profile_username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
' class='dropdown-item'>My profile</a>
                  <form action='Z_uitloggen.php' method='POST'>
                    <input type='submit' value='Log out <?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
' name='submit' class='dropdown-item' ></a>
                  </form>

              </ul>
            </li>
          </ul>

        </ul>
      </div>
    </div>
  </div>
</nav><?php }
}
