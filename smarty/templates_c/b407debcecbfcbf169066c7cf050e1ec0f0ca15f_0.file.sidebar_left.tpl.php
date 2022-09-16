<?php
/* Smarty version 3.1.31, created on 2022-05-15 11:54:23
  from "C:\wamp64\www\school\eindwerk\smarty\templates\page_parts\sidebar_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6280e9ef94ad55_27422565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b407debcecbfcbf169066c7cf050e1ec0f0ca15f' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\smarty\\templates\\page_parts\\sidebar_left.tpl',
      1 => 1652615661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280e9ef94ad55_27422565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="left_sidebar" >
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">LOGO</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <i class="fa-solid fa-house-chimney-user"></i>
          Home
        </a>
      </li>
      <li>
        <!-- <a href="#" class="nav-link text-white"> -->
        <a href="#" class="nav-link disabled">
          <!--
          <i class="fa-solid fa-bell-on"></i>
          <i class="fa-solid fa-bells"></i>
          -->
          <i class="fa-solid fa-bell disabled"></i>
          Notifications 
        </a>
      </li>
      <li>
        <!--<a href="#" class="nav-link text-white disabled">-->
        <a href="#" class="nav-link disabled">
          <!--
          <i class="fa-solid fa-messages"></i>
          <i class="fa-solid fa-message-dots"></i>
          -->

          <i class="fa-solid fa-message disabled"></i>
          Messages
        </a>
      </li>
      <li>
        <!-- <a href="#" class="nav-link text-white"> -->
        <a href="#" class="nav-link disabled">
          <i class="fa-solid fa-user disabled"></i>
          Profile
        </a>
      </li>
      <li>
        <!--<a href="#" class="nav-link text-white">-->
        <a href="#" class="nav-link disabled">
          <i class="fa-solid fa-user-gear disabled"></i>
          Settings
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropup">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Add an existing account</a></li>
        <li><a class="dropdown-item" href="#">Log out @user_name</a></li>
      </ul>
    </div>
  </div><?php }
}
