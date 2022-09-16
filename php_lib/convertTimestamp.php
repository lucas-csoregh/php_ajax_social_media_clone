<?php
function convertTimestamp($_timestampBigint) {
  $_dateTime = date("Y-m-d H:i:s", $_timestampBigint);
  $_dateTimeNow = Date("Y-m-d H:i:s");
  $_startDate = new DateTime($_dateTime);
  $_endDate = new DateTime($_dateTimeNow);
  $_diff = $_startDate->diff($_endDate);
  $_timeMessage = "";
  if($_diff->y >= 1) { // YEARS
    if($_diff == 1) {
      $_timeMessage = $_diff->y . " year ago";
    } else {
      $_timeMessage = $_diff->y . " years ago";
    }
  } else if($_diff-> m >= 1) { // MONTHS
    if($_diff->d == 0) {
      $_days = " ago";
    } else if($_diff->d == 1) {
      $_days = " day ago";
    } else if($_diff->d >= 1) {
      $_days = " days ago";
    }

    if($_diff->m == 1) {
      $_timeMessage = $_diff->m . " month". $_days;
    } else {
      $_timeMessage = $_diff->m . " months". $_days;
    }
  } else if($_diff->d >= 1) { // DAYS
    if($_diff->d == 1) {
      $_timeMessage = "Yesterday";
    } else {
      $_timeMessage = $_diff->d . " days ago ";
    }
  } else if($_diff->h >= 1) { // HOURS 
    if($_diff->h == 1) {
      $_timeMessage = $_diff->h . " hour ago";
    } else {
      $_timeMessage = $_diff->h . " hours ago";
    }
  } else if($_diff->i >= 1) { // MINUTES 
    if($_diff->i == 1) {
      $_timeMessage = $_diff->i . " minute ago";
    } else {
      $_timeMessage = $_diff->i . " minutes ago";
    }
  } else if($_diff->s >= 1) { // MINUTES 
    /*
    if($_diff->s > 30) {
      $_timeMessage = "Just now";
    } else {
      $_timeMessage = $_diff->s . " seconds ago";
    }
    */
    $_timeMessage = "Just now";
  }

  return $_timeMessage;
}
?>