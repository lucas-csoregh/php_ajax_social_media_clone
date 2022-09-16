<?php
/* Smarty version 3.1.31, created on 2022-05-15 11:50:01
  from "C:\wamp64\www\school\eindwerk\smarty\templates\page_parts\sidebar_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6280e8e90c5a56_40611714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb31363c04004ead32ce901d8e76618662a05fd' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\smarty\\templates\\page_parts\\sidebar_right.tpl',
      1 => 1652615399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280e8e90c5a56_40611714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="left_sidebar" >
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Right Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <!--
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <i class="fa-solid fa-house-chimney-user"></i>
          Home
        </a>
      </li>
      -->

      <form class="form-inline my-2 my-lg-0">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        <div class="input-group mb-3">
          <input class="form-control mr-sm-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
              <button type="button" class="btn btn-light input-group-text rounded-right" id="searchglass"> 
            <i class="fa-solid fa-magnifying-glass p-1"></i>
              </button>

          </div>

        </div>
      </form>

    </ul>
    <hr>
    <!--
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
    -->
		<p class="text-light m-0 p-1">
		<?php echo '<script'; ?>
 language="javascript">
			document.write(copyRight("webontwikkeling.info"));
		<?php echo '</script'; ?>
>
		</p>
  </div><?php }
}
