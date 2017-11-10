<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post</title>
  </head>
  <body>

<?php require "header.php" ?>

  <form method="post">
      <input id="text" type="text" name="text" >
      <input type="submit" onClick="post()" value="Post">
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

  function post(){

    console.log( document.getElementById("text").value )
    $.ajax({
      url: "<?= URL ?>/post/post",
      type: "POST",
      data: {"text": document.getElementById("text").value},
      success:  function(data){
        console.log(data);
      }
    });
  }

  function load(){
alert("load");
    $.ajax({
      type: "GET",
      url: "<?=URL ?>/post/load",
      success: function(data){

        console.log(data);


      }
    });
  }

  load();


</script>

  </body>
</html>
