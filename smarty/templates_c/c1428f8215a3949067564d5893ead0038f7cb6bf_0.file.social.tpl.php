<?php
/* Smarty version 3.1.31, created on 2022-06-16 15:52:47
  from "C:\wamp64\www\school\webapplicaties\eindwerk\12_social\smarty\templates\social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ab51cfdd38b4_21285454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1428f8215a3949067564d5893ead0038f7cb6bf' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\12_social\\smarty\\templates\\social.tpl',
      1 => 1655394761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/navbar.tpl' => 1,
    'file:page_parts/copyright.tpl' => 1,
  ),
),false)) {
function content_62ab51cfdd38b4_21285454 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
-->

<?php echo '<script'; ?>
 src="../bootstrap5/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<link href="../bootstrap5/css/bootstrap.min.css" rel="stylesheet">

<link href="../css/ledenadmin.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="../js_lib/copyright.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/e14a9e36a3.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  src="../ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="../ajax_scripts/toggleFriendRequest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/acceptFriendRequest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/ignoreFriendRequest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/unfriend.js"><?php echo '</script'; ?>
>

<?php
$__section_teller_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_teller']) ? $_smarty_tpl->tpl_vars['__smarty_section_teller'] : false;
$__section_teller_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['jsInclude']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_teller_0_total = $__section_teller_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_teller'] = new Smarty_Variable(array());
if ($__section_teller_0_total != 0) {
for ($__section_teller_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_teller']->value['index'] = 0; $__section_teller_0_iteration <= $__section_teller_0_total; $__section_teller_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_teller']->value['index']++){
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsInclude']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_teller']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_teller']->value['index'] : null)];?>
"><?php echo '</script'; ?>
>
<?php
}
}
if ($__section_teller_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_teller'] = $__section_teller_0_saved;
}
?>


  <div class="grid">
    <div class="row p-0 m-0">
      <div id="lflank-top" class="col bg-dark"></div>
      <div id="middle-top" class="col-7 p-0 m-0">
        <?php $_smarty_tpl->_subTemplateRender("file:page_parts/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
      </div>
      <div id="rflank-top" class="col bg-dark"></div>
    </div>

    <div class="row p-0 m-0">
      <div id="lflank" class="col text-center">
        <?php echo $_smarty_tpl->tpl_vars['lflank']->value;?>

        <?php $_smarty_tpl->_subTemplateRender("file:page_parts/copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
      <div id="middle" class="col-7 p-0 m-0">

        <?php echo $_smarty_tpl->tpl_vars['postArea']->value;?>


        <div id="postsContainer">
        <?php echo $_smarty_tpl->tpl_vars['inhoud']->value;?>

        </div>

      </div>
      <div id="rflank" class="col">
        <ul style="list-style: none" class="ps-1 pt-3">
        <?php echo $_smarty_tpl->tpl_vars['rflank']->value;?>

        </ul>
      </div>
    </div>
  </div>


<title>Social</title>
</head>
<body>
  
<?php echo '<script'; ?>
 src="../ajax_scripts/likePost.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/submitPost.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/submitComment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/editPost.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../ajax_scripts/deletePost.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="../js_lib/showCommentingButton.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
