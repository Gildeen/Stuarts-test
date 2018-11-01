<?php 
include('db.php');
?>

<form method='post' action='#'>
    <label for='fname'>First name: </label>
    <input type='text' name='fname'/>
    <label for='lname'>Last name: </label>
    <input type='text' name='lname'/>
    <label for='age'>Age: </label>
    <input type='text' name='age'/>
    <label for='role'>Role: </label>
    <select name='role'>
        <option value='1'>User</option>
        <option value='2'>Admin</option>
        <option value='3'>Super Admin</option>
    </select>
</form>

<?php

?>