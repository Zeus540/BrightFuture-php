<?php
echo '
<div class="Content-box Flexed-column ">

<div id="Create-profile-user-block-mobile">

<form action="" class="Flexed-column">
    <label for="Gender">Im a</label>
    <div class="custom-select" >
        <select name="Gender ">
              <option value="0">Select</option>
              <option value="1">Male</option>
              <option value="1">Female</option>
        </select>
    </div>
    
   <label for="Name">Name</label>
   <input type="Name" name="Name" id="Name" placeholder="This field is required" required>

   <label for="Surname">Surname</label>
   <input type="Surname" name="Surname" id="Surname" placeholder="This field is required" required>
   
   <label for="Email">Email</label>
   <input type="Email" name="Email" id="Email" placeholder="This field is required" required>

   <label for="Mobile number">Mobile number</label>
   <input type="Mobile number" name="Mobile number" id="Mobile number" placeholder="This field is required" required>

   <label for="Email">Password</label>
   <input type="Password" name="Password" id="Password" placeholder="This field is required" required>
 
   <button type="submit">Create profile</button>
</form>
</div>

</div>
';
?>