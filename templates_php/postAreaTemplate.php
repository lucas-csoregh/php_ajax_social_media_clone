<?php
function getPostArea() {
  $_postArea = "
  <div class='collapse' id='collapseExample'>

    <div class='card mt-1percent'>
      <div class='card-body p-1'>
        <!-- <form action='A_home.php' method='POST' id='postForm'> -->
        <div>
          <textarea  rows='4' cols='50'  name='postArea' id='postArea'></textarea> 
          <input type='button' name='submitPost' value='Post' onclick='submitPost()' id='postButton' class='btn btn-primary'>
          <script>
            CKEDITOR.replace( 'postArea' ); 
          </script>
        </div>
        <!-- </form> -->
      </div>
    </div>

  </div>
  ";

  return $_postArea;
}

?>