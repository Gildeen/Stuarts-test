<?php 
include('db.php');
?>

<form method='post' action='#'>
    <label for='fname'>First name: </label>
    <input type='text' name='fname'/></br>
    <label for='lname'>Last name: </label>
    <input type='text' name='lname'/></br>
    <label for='age'>Age: </label>
    <input type='text' name='age'/></br>
    <label for='role'>Role: </label>
    <select name='role'>
        <option value='1'>User</option>
        <option value='2'>Admin</option>
        <option value='3'>Super Admin</option>
    </select></br>
    <input type='submit' name='submit' value='Submit'>
</form>

<?php
    if(isset($_POST['submit'])){
        
        addUser($conn, $_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['role']);
    }

    showContent($conn);
?>