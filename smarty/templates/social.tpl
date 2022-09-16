<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
-->

<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
<link href="../bootstrap5/css/bootstrap.min.css" rel="stylesheet">

<link href="../css/ledenadmin.css" rel="stylesheet" type="text/css">
<script src="../js_lib/copyright.js"></script>


<script src="https://kit.fontawesome.com/e14a9e36a3.js" crossorigin="anonymous"></script>
<script  src="../ckeditor/ckeditor.js"></script>

<script src="../ajax_scripts/toggleFriendRequest.js"></script>
<script src="../ajax_scripts/acceptFriendRequest.js"></script>
<script src="../ajax_scripts/ignoreFriendRequest.js"></script>
<script src="../ajax_scripts/unfriend.js"></script>

{section name=teller loop=$jsInclude}
    <script src="{$jsInclude[teller]}"></script>
{/section}


  <div class="grid">
    <div class="row p-0 m-0">
      <div id="lflank-top" class="col bg-dark"></div>
      <div id="middle-top" class="col-7 p-0 m-0">
        {include file="page_parts/navbar.tpl"} 
      </div>
      <div id="rflank-top" class="col bg-dark"></div>
    </div>

    <div class="row p-0 m-0">
      <div id="lflank" class="col text-center">
        {$lflank}
        {include file="page_parts/copyright.tpl"}
      </div>
      <div id="middle" class="col-7 p-0 m-0">

        {$postArea}

        <div id="postsContainer">
        {$inhoud}
        </div>

      </div>
      <div id="rflank" class="col">
        <ul style="list-style: none" class="ps-1 pt-3">
        {$rflank}
        </ul>
      </div>
    </div>
  </div>


<title>Social</title>
</head>
<body>
  
<script src="../ajax_scripts/likePost.js"></script>
<script src="../ajax_scripts/submitPost.js"></script>
<script src="../ajax_scripts/submitComment.js"></script>
<script src="../ajax_scripts/editPost.js"></script>
<script src="../ajax_scripts/deletePost.js"></script>

<script src="../js_lib/showCommentingButton.js"></script>

</body>
</html>
