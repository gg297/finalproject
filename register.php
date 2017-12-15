

<html>
<head>
<p><b><h1> To-Do Form</h1></b></p>
<body>
<form action="database.php" method="post" enctype="multipart/form-data">
First Name : <input type="text" name="fname" placeholder="First name" pattern=".{1,}"required ><br><br>
Last Name : <input type="text" name="lname" placeholder="Last name" pattern=".{1,}" required><br><br>
Email : <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
Phone : <input type="tel" name="tel" placeholder="123-4567890" maxlength="10" required><br><br>
Birthday : <input type="date" name="bday" placeholder="mm/dd/yyyy" required><br><br>
Gender : <input type="radio" name="gender" value="Male">Male
         <input type="radio" name="gender" value="Female">Female<br><br>
Password : <input type="password" name="psw" placeholder="Password" pattern=".{6,}" required><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

