<?php
/* Smarty version 3.1.31, created on 2022-05-30 12:47:42
  from "C:\wamp64\www\school\webapplicaties\eindwerk\v4.1test\smarty\templates\page_parts\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6294bcee198170_78035200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee983472c29a41da4c22d656847d5a54916698b' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\v4.1test\\smarty\\templates\\page_parts\\navbar.tpl',
      1 => 1653804949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294bcee198170_78035200 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-dark bg-dark w-100 p-0 m-0">
  <div id="nav-container">
    <a class="navbar-brand" href="#" title="logo">PEERS</a>

    <input class="form-control bg-dark text-light" id="searchform" type="search" placeholder="Search" aria-label="Search">

    <div id="navbtn-container">
      <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">-->
      <ul class="navbar-nav d-flex flex-row ms-3">
        <li class="nav-item">
          <a href="#" class="nav-link active" title="Create post">
            <!-- <i class="fa-solid fa-xl fa-house-chimney-user"></i> -->
            <i class="fa-solid fa-pen-to-square fa-xl" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="Create post"></i>
            <!--Home-->
          </a>
        </li>
        <!--
        <li class="hasnotifcation">
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-bell disabled position-absolute">
            <span class="badge rounded-pill bg-danger" id="notificationBadge">
              1
            </span>
            </i>
          </a>
        </li>
        <li class="hasnotifcation">
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-message disabled position-absolute">
            <span class="badge rounded-pill bg-danger" id="messageBadge">
              1
            </span>
            </i>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-user-gear disabled"></i>
          </a>
        </li>
        -->
        <li class="d-flex align-items-center justify-content-center">
          <!-- TODO: ADD MODAL with options to log out, change account or add new account -->

          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="<?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['profilePic']->value;?>
" alt="" width="28" height="28" class="rounded-circle">
          </a>
        </li>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="Z_uitloggen.php" method="POST">
                  <!--
                  <label for="persist">Vergeet mij</label>
                  <input type='checkbox' name='persist'/><br><br>
                  -->
                  <input type="submit" value="Log out '<?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
'" name="submit" class="btn btn-light" ></a>
                </form>
              </div>
              <!--
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
              -->
            </div>
          </div>
        </div>


      </ul>
    </div>
  </div>
</nav><?php }
}
