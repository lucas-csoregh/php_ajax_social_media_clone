<?php
/* Smarty version 3.1.31, created on 2022-05-16 06:25:35
  from "C:\wamp64\www\school\eindwerk\smarty\templates\page_parts\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6281ee5f14e9d0_98850885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5c9f420bdb5de4f115d5bda777889ba3b12f7a' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\smarty\\templates\\page_parts\\navbar.tpl',
      1 => 1652682332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6281ee5f14e9d0_98850885 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-dark bg-dark w-100">
  <div id="nav-container">
    <a class="navbar-brand" href="#">LOGO</a>

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
          <a href="#" class="nav-link active" aria-current="page">
            <i class="fa-solid fa-lg fa-house-chimney-user"></i>
            <!--Home-->
          </a>
        </li>
        <li class="hasnotifcation">
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-bell disabled position-absolute">
            <span class="badge rounded-pill bg-danger" id="notificationBadge">
              1
            </span>
            </i>
            <!--Notifications -->
          </a>
        </li>
        <li class="hasnotifcation">
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-message disabled position-absolute">
            <span class="badge rounded-pill bg-danger" id="messageBadge">
              1
            </span>
            </i>
            <!-- Messages -->
          </a>
        </li>
        <li>
          <a href="#" class="nav-link disabled">
            <i class="fa-solid fa-lg fa-user-gear disabled"></i>
            <!-- Settings -->
          </a>
        </li>
        <li class="d-flex align-items-center justify-content-center">
          <!-- TODO: ADD MODAL with options to log out, change account or add new account -->
          <a href="#" class="text-white text-decoration-none">
            <img src="https://github.com/mdo.png" alt="" width="30" height="30" class="rounded-circle me-2">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php }
}
