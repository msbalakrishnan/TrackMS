<?php
// include the heading content 

$title="register";
include_once "includede/header.php";
?>
<br>
<br>
<h2 class="text-center" style="color: rgb(72, 48, 117);">Register</h2>
<br>
<div class="center" >
    <form action="">
        <label for="name">User-name:</label>
        <input type="text" id="name">
        <label for="p">pass-word:</label>
        <input type="password">
        <label for="cp">Confirm-pass-word:</label>
        <input type="password" id="cp">
        <br>
        <input type="button" value="submit">
    </form>
</div>

<?php
// include the footer content ..
include_once "includede/footer.php";
?>