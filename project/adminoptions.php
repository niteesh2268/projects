<?php
session_start();
echo '<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
	<form action="addresources.html" method="post" id="form1">
	<input type="submit" name="submit" value="add resources">
	</form>
	<form action="removeresources.html" method="post" id="form1">
	<input type="submit" name="submit" value="remove resources">
	</form>
	<form action="addresourcetype.html" method="post" id="form2">
	<input type="submit" name="submit" value="add resource type">
	</form>
	<form action="changepassword.html" method="post" id="form3">
	<input type="submit" name="submit" value="change password">
	</form>
	<form action="adminlogin.html">
	<input type="submit" value="logout" name="logout">
	</form>
</body>';
?>
