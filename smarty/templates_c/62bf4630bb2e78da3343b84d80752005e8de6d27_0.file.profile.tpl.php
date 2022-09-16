<?php
/* Smarty version 3.1.31, created on 2022-06-02 09:35:16
  from "C:\wamp64\www\school\webapplicaties\eindwerk\9_social\smarty\templates\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6298845408b9f7_96012779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bf4630bb2e78da3343b84d80752005e8de6d27' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\9_social\\smarty\\templates\\profile.tpl',
      1 => 1654162422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6298845408b9f7_96012779 (Smarty_Internal_Template $_smarty_tpl) {
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
  <nav class="navbar navbar-dark bg-dark w-100 p-0 m-0">
    <div id="nav-container">
      <a class="navbar-brand" href="A_home.php" title="logo">PEERS</a>

      <!-- <input class="form-control bg-dark text-light" id="searchform" type="search" placeholder="Search" aria-label="Search"> -->
      

      <form class="form-inline" action="A_profile.php" method="GET" id="searchform">
        <div class="input-group">
          <input class="form-control bg-dark text-light" type="search" name="profile_username" placeholder="Search" aria-label="Search">
          <div class="input-group-append"><button type="submit" class="btn btn-light input-group-text rounded-right" id="searchglass">  <i class="fa-solid fa-magnifying-glass p-1"></i></button></div>
        </div>
      </form>

      <div id="navbtn-container">
        <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">-->
        <ul class="navbar-nav d-flex flex-row ms-3">
          <?php echo $_smarty_tpl->tpl_vars['postButton']->value;?>


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
                  <?php echo $_smarty_tpl->tpl_vars['myprofile']->value;?>

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
  </nav>

  <div id="container">


    <!-- <div id="txtHint"><b>Person info will be listed here...</b></div> -->

    <!--
    <form action="A_home.php" method="POST">
      <div class="form-floating" id="postForm">
        <textarea rows="1" class="form-control" placeholder="Leave a comment here" name="postArea" id="postArea"></textarea>
        <label for="textarea">Spread the word</label>
        <input type="submit" name="submitPost" value="Post" id="postButton" class="btn btn-primary"></button>
      </div>
    </form>
    -->
      <?php echo $_smarty_tpl->tpl_vars['postArea']->value;?>




    <div id="postsContainer">
    <?php echo $_smarty_tpl->tpl_vars['inhoud']->value;?>

    </div>

  </div>

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
>

function showCommentingButton($_postID) {

  var commentingButton = document.getElementById("commentingButton" + $_postID);
  var numComments = parseInt(document.getElementById("numComments" + $_postID).innerHTML);

  if(commentingButton.classList.contains("d-none")) {
    commentingButton.classList.remove("d-none")
  } else {
    commentingButton.classList.add("d-none")
  }



  /*
  if(numComments != 0) {

    if(commentingButton.classList.contains("d-none")) {
      commentingButton.classList.remove("d-none")
    } else {
      commentingButton.classList.add("d-none")
    }

  } else {

    console.log(numComments);
  }
  */


}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
