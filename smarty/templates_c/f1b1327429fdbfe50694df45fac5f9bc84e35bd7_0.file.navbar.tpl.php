<?php
/* Smarty version 3.1.31, created on 2022-05-17 11:20:12
  from "C:\wamp64\www\school\eindwerk\v0.2\smarty\templates\page_parts\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628384ec5bf342_74454982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b1327429fdbfe50694df45fac5f9bc84e35bd7' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v0.2\\smarty\\templates\\page_parts\\navbar.tpl',
      1 => 1652784727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628384ec5bf342_74454982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-dark bg-dark w-100">
  <div id="nav-container">
    <a class="navbar-brand" href="#" title="Home">LOGO</a>

    <form class="form-inline " id="searchform">
      <div class="input-group">
        <input class="form-control mr-sm-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button type="button" class="btn btn-light input-group-text rounded-right" id="searchglass"> 
          <i class="fa-solid fa-magnifying-glass p-1"></i>
            </button>
        </div>
      </div>
    </form>

    <div id="navbtn-container">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page" title="Home">
            <i class="fa-solid fa-lg fa-house-chimney-user"></i>
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

          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Lucas Csoregh">
            <img src="https://github.com/mdo.png" alt="" width="30" height="30" class="rounded-circle me-2">
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
                <a href="Z_uitloggen.php" class="btn btn-light" >Log out "Lucas Csoregh"</a>
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
