<html lang="en">
<body>	
 <h4>Staff Details </h4> 
 
<form action="http://localhost/crud/College/showData/" method="POST">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="fname" placeholder="Enter your name" ></td>
</tr>
<tr>
<td>Date of Joining</td>
<td><input type="date" name="date"></td>
</tr>
<tr>
<td>
Address</td>
<td><textarea name="Address" rows="5" cols="40"placeholder="Enter your Address"></textarea></td>
</tr>
 <tr><td><label for="Department">Department:</label></td>
 <td> <select name="Department" id="Department">
<option value="">select</option>
<option value="">COMPUTER SCIENCE</option>
<option value="">INFORMATION TECHNOLOGY</option>
<option value="">ELECTRICAL AND ELECTRONICS</option>
<option value="">ROBOTICS</option></select></td></tr>
<tr><td>Phone Number</td><td><input type="number" name="number" placeholder="Enter your number" ></td></tr>
<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other</td></tr>
<tr>
<td>Blood Group</td> 
<td><select name="blood">
<option value="">select</option>
<option value="">O+ve</option>
<option value="">O-ve</option>
<option value="">other</option></select></td></tr>
<tr>
<td>  </td>

<td><input type="submit"><br></td></tr>
</form>

</body>
</html>