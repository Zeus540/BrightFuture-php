<?php
echo '
<div class="Content-box Flexed-column ">
  <div class="Row  m-t-10 center">
        <h4 class=""><strong><img src="../../../assets/images/back.png" alt="">&nbsp;<a class="Accent Decoration-none Bold" href="../../../index.php">Back to Login</a></strong></h4>
  </div>
<section id="forgot-password-user-block-mobile">
    <h1 class="Text-center heading password-user-mobile-heading m-t-10 Bold">Password reset</h1>
    <p class="Text-center m-t-10 Bold">Registered Users</p>
    <p class="Text-center m-t-5"> No problem. Just enter your email that
            you used to create your profile below and
            a password reset email will be sent to you.</p>
</section>
<section>
    <form action="" class="Flexed-column m-t-5">
        <label class="Bold" for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="This field is required" required>

        <label class="Bold" for="Email">Password</label>
        <input type="Password" name="Password" id="Password" placeholder="This field is required" required>
        <button type="submit">Log in</button>
        <sub><a class="Link" href="../../../views/index.php">Forgot Password?</a></sub>
    </form>
</section>
</div>
';
?>