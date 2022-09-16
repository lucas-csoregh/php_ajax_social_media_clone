<?php
/* Smarty version 3.1.31, created on 2022-05-17 12:34:29
  from "C:\wamp64\www\school\eindwerk\v0.4\smarty\templates\social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62839655c89f19_52069093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1951f9b316fc2c4864b3bac0d7b1caf143961e03' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v0.4\\smarty\\templates\\social.tpl',
      1 => 1652790865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/navbar.tpl' => 1,
  ),
),false)) {
function content_62839655c89f19_52069093 (Smarty_Internal_Template $_smarty_tpl) {
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
<link href="../css/sidebars.css" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 src="../js_lib/copyright.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js_lib/sidebars.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/e14a9e36a3.js" crossorigin="anonymous"><?php echo '</script'; ?>
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

    <form action="A_home.php" method="POST">
    <div class="form-floating" id="postForm">
      <textarea class="form-control" placeholder="Leave a comment here" name="postArea" id="floatingTextarea"></textarea>
      <label for="floatingTextarea">Spread the word</label>
      <input type="submit" name="submitPost" value="Post" id="postButton" class="btn btn-primary"></button>
    </div>
    </form>

    <div class="card post">
      <div class="card-body">
        <div class="poster">
          <a href="#" class="text-white text-decoration-none">
            <img src="https://github.com/mdo.png" alt="" width="50" height="50" class="rounded-circle me-2">
          </a>
          <div class="poster_text">
            <h5 class="card-title">Lucas Csoregh</h5>
            <h6 class="card-subtitle mb-2 text-muted">posted 1h ago</h6>
          </div>
        </div>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-light postBtnCluster">
          <i class="fa-solid fa-heart"></i>&nbsp;Like (0)
        </button>
        <button type="button" class="btn btn-light postBtnCluster">
          <i class="fa-solid fa-message"></i>&nbsp;Comment (0)
        </button>
      </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['inhoud']->value;?>


  </div>


</body>
</html>
<?php }
}
