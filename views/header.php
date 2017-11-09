<div class="header">

<?php 
 if(session::get("logedIn")):  ?>
  <a href="/moe/index/logout">Logout</a>
<?php else: ?>
  <a href="/moe/index/login">Log in</a>
<?php endif  ?>

</div>
