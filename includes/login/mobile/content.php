<?php
echo '
<div class="Content-box Flexed-column ">
<section >
    <p >Have you created a profile?</p>
    <p > Log in now.</p>
</section>
<section>
    <form action="" class="Flexed-column">
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="This field is required" required>

        <label for="Email">Password</label>
        <input type="Password" name="Password" id="Password" placeholder="This field is required" required>
        <button type="submit">Log in</button>
        <sub><a href="/forgotpassword">Forgot Password?</a></sub>
    </form>
</section>
</div>
';
?>