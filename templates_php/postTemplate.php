<?php
function postTemplate($_postID,
                      $_profilePic,
                      $_firstName,
                      $_lastName,
                      $_username,
                      $_postBody,
                      $_postedWhen,
                      $_loadedComments,
                      $_editButton,
                      $_numComments,
                      $_numLikes,
                      $_likedByMe,
                      $_loadScripts) {
  if($_editButton == 1) {
    $_editButton = "
        <button type='button' class='btn btn-light postBtnCluster' data-bs-toggle='collapse' data-bs-target='#collapsePostEdit$_postID' aria-expanded='false' aria-controls='collapsePostEdit$_postID'>
              <i class='fa-solid fa-pen'></i>&nbsp;Edit
        </button>";
  }  elseif($_editButton == 2) {
    // show delete content button for admin
    $_editButton = "
        <button type='button' class='btn btn-danger postBtnCluster' onclick='deletePost($_postID)'>
          <i class='fa-solid fa-trash-can'></i>&nbsp;Delete
        </button>
    ";
  } else {
    $_editButton = "";
  }


  if($_loadScripts == true) {
  $_script1 = "
              <script >   
                CKEDITOR.replace( 'commentArea$_postID' ); 
                //console.log('commentArea$_postID');
              </script>
  ";
  $_script2 = "
                <script >   
                  CKEDITOR.replace( 'postEditingArea$_postID' ); 
                  //console.log('postEditingArea$_postID');
                </script>
  ";
  } else {
    $_script1 = "";
    $_script2 = "";
  }


  if($_likedByMe == true) {
    $_likeIcon = "<i class='fa-solid fa-heart-crack'></i>&nbsp;Unlike ($_numLikes)";
  } else {
    $_likeIcon = "<i class='fa-solid fa-heart'></i>&nbsp;Like ($_numLikes)";
  }





  $_top = "<div id='post$_postID' class='card post'>
      <div class='card-body'>
        <div class='poster'>
          <a href='A_profile.php?profile_username=$_username' class='text-white text-decoration-none'>
            <img src='$_profilePic' alt='' width='50' height='50' class='rounded-circle me-2'>
          </a>
          <div class='poster_text'>
            <h5 class='card-title'>$_firstName $_lastName</h5>
            <h6 class='card-subtitle mb-2 text-muted'>$_postedWhen</h6>
          </div>
        </div>
        <div class='card-text' id='contentArea$_postID'>$_postBody</div>

        <!-- <form action='A_home.php' method='POST'> -->
        <div>
          <button type='button' name='submitLike' id='likeButton$_postID' onclick='likePost($_postID)' class='btn btn-light postBtnCluster'>
            $_likeIcon
          </button>
          
          <button type='button' onclick='showCommentingButton($_postID)' class='btn btn-light postBtnCluster'  data-bs-toggle='collapse' data-bs-target='#collapseComment$_postID' aria-expanded='false' aria-controls='collapseComment$_postID'>
            <i class='fa-solid fa-message'></i>&nbsp;Comment (<span id='numComments$_postID'>$_numComments</span>)
          </button>

          <button class='btn btn-light d-none' id='commentingButton$_postID' type='button' data-bs-toggle='collapse' data-bs-target='#collapseCommentingArea$_postID' aria-expanded='false' aria-controls='collapseCommentingArea$_postID'>
            <i class='fa-solid fa-pen-to-square'></i>&nbsp;Comment
          </button>

          $_editButton

          <!-- COLLAPED COMMENTSECTION -->
          <div class='collapse' id='collapseComment$_postID'>


        <div class='collapse' id='collapseCommentingArea$_postID'>

          <div class='commentForm'>
              <textarea  rows='4' cols='50'  name='commentArea' id='commentArea$_postID'></textarea> 
              <div class='d-flex flex-row justify-content-between'>
                <input type='button' value='Comment' onclick='submitComment($_postID)' class='btn btn-primary commentButton'>
              </div>
              $_script1
          </div>

        </div>

              <div id='commentSection$_postID'>";

            $_bottom = "</div> <!-- closing commentSection$_postID -->
            </div> <!-- closing collapseComment$_postID -->

        </div>
        



<div class='collapse' id='collapsePostEdit$_postID'>
  <div>
      <textarea  rows='4' cols='50' id='postEditingArea$_postID'>$_postBody</textarea> 
      <div class='d-flex flex-row justify-content-between mt-3'>
        <input type='button' onclick='deletePost($_postID)' class='btn btn-danger btn-sm' value='Delete Post'>
        <input type='button' onclick='editPost($_postID)' value='Save' class='btn btn-primary btn-sm'>
      </div>
      $_script2
  </div>
</div>

      </div>
    </div>";
  $_output = $_top . $_loadedComments . $_bottom;
  return array($_output, $_top, $_bottom);
}
?>