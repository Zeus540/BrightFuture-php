<?php
echo '
<div class="Login Flexed-row ">
<section >
    <img id="boy-image" src="./assets/images/BoyCharacter1.png" alt="">
</section>
<section class="Rounded Flexed-row">
    <div id="left-block">
       <p><strong>New User</strong></p>
        <p>
        Sign up now to create your profile.
        Help your little one learn all about
        good hygiene in a fun and
        engaging way.
       </p>    
       <button type="submit"><a href="../../../createprofile.php">Create profile</a></button>
    </div>
    <div id="right-block">
        <p><strong>Registered Users</strong></p>
        <p>
        Have you created a profile? <br>
        Log in now.
       </p> 
       <form action="" class="Flexed-column">
           <label for="Email">Email</label>
           <input type="Email" name="Email" id="Email" placeholder="This field is required" required>

           <label for="Email">Password</label>
           <input type="Password" name="Password" id="Password" placeholder="This field is required" required>
           <sub>
               <a href="../../views/forgotpassword.php">Forgot password?</a>
           </sub>
           <button type="submit">Log in</button>
       </form>
    </div>
</section>
<section>
        <img id="girl-image" src="./assets/images/GirlCharacter.png" alt="">
</section>
<div>
        <img id="bottom-right-bg" src="./assets/images/Sizwe&Lizzy.png" alt="" >
</div>
</div>
';
?>