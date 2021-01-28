<?php
echo '
<div class="Login Flexed-row ">
<section >
    <img id="Create-profile-boy-image" src="./assets/images/BoyCharacter1.png" alt="">
</section>
<section class="Rounded Flexed-row">
   
    <div id="Create-profile-user-block">
        <div class="Row">
     
            <h4 class="Bold"><strong><img src="./assets/images/back.png" alt="">&nbsp;<a href="./index.php">Back to Login</a></strong></h4>
        </div>
        <h1 class="Bold"><strong>Lets get started</strong></h1>
        <p>
            Sign up now to create your profile. Help your little one learn all about
            good hygiene in a fun and engaging way. 
       </p> 
       <form action="" class="Flexed-column">
           
            <label class="Bold" for="Gender">Im a</label>
            <div class="custom-select" >
                <select name="Gender ">
                      <option value="0">Select</option>
                      <option value="1">Male</option>
                      <option value="1">Female</option>
                </select>
            </div>

           <label class="Bold" for="Name">Name</label>
           <input type="Name" name="Name" id="Name" placeholder="This field is required" required>

           <label class="Bold" for="Surname">Surname</label>
           <input type="Surname" name="Surname" id="Surname" placeholder="This field is required" required>
           
           <label class="Bold" for="Email">Email</label>
           <input type="Email" name="Email" id="Email" placeholder="This field is required" required>

           <label for="Mobile number">Mobile number</label>
           <input type="Mobile number" name="Mobile number" id="Mobile number" placeholder="This field is required" required>

           <label for="Email">Password</label>
           <input type="Password" name="Password" id="Password" placeholder="This field is required" required>
         
           <button type="submit">Create profile</button>
       </form>
    </div>
</section>
<section>
        <img id="Create-profile-girl-image" src="./assets/images/GirlCharacter.png" alt="">
</section>
<div>
        <img id="Create-profile-bottom-right-bg" src="./assets/images/Sizwe&Lizzy.png" alt="" >
</div>
</div>
';
?>