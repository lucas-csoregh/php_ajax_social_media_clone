<?php
/* Smarty version 3.1.31, created on 2022-05-19 19:48:57
  from "C:\wamp64\www\school\eindwerk\v0.6\smarty\templates\social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62869f2913e978_16581390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f81a56d82794da645998c08d436d87efde51d2df' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v0.6\\smarty\\templates\\social.tpl',
      1 => 1652989733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/navbar.tpl' => 1,
  ),
),false)) {
function content_62869f2913e978_16581390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>


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

<title>Social</title>
</head>
<body>
  <?php $_smarty_tpl->_subTemplateRender("file:page_parts/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div id="container">

    <!--
    <form action="A_home.php" method="POST">
      <div class="form-floating" id="postForm">
        <textarea rows="1" class="form-control" placeholder="Leave a comment here" name="postArea" id="postArea"></textarea>
        <label for="textarea">Spread the word</label>
        <input type="submit" name="submitPost" value="Post" id="postButton" class="btn btn-primary"></button>
      </div>
    </form>
    -->
    <div class='card mt-1percent'>
      <div class='card-body p-1'>
        <form action="A_home.php" method="POST" id="postForm">
        <textarea  rows='4' cols='50'  name="postArea" id="postArea"></textarea> 
        <input type="submit" name="submitPost" value="Post" id="postButton" class="btn btn-primary">
        <?php echo '<script'; ?>
 >   
          CKEDITOR.replace( 'postArea' ); 
        <?php echo '</script'; ?>
>
        </form>
      </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['inhoud']->value;?>


  </div>

</body>
</html>
<?php }
}
