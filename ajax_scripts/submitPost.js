function submitPost() {
  var post = CKEDITOR.instances["postArea"].getData(); 
  //console.log("comment on d_post #" + $_postID);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("postsContainer").insertAdjacentHTML('afterbegin', this.responseText);
      CKEDITOR.instances["postArea"].setData('');

      $_postID = this.getResponseHeader('postID');
      //console.log( 'postEditingArea' + $_postID );
      CKEDITOR.replace( 'postEditingArea'+$_postID ); 
      //console.log( 'commentArea' + $_postID );
      CKEDITOR.replace( 'commentArea' + $_postID ); 
    }
  };
  xmlhttp.open("GET","../ajax_scripts/submitPost.php?p="+post,true);
  xmlhttp.send();
}