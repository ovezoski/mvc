<div class="header" style="width:100%; height: 30px; background: #88f">

    <div style="display:block; margin: 20px">

      <?php
       if(session::get("logedIn")):  ?>
        <a href="<?= URL ?>/login/logout">Logout</a>
      <?php else: ?>
        <a href="<?= URL ?>/login">Log in</a>
      <?php endif  ?>

    </div>
</div>
