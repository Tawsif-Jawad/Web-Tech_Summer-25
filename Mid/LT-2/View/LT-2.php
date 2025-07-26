<!DOCTYPE html>
<html lang="en">
<title>This is Registration Form</title>

<body style="background-color: lightblue; color: white;" >
<center>
<h1 style ="color: navy;">Bank Management System</h1>
<h2 style ="color: navy;">Your Trusted Financial Partner</h2>
</center>
<h3 style="text-align: left;color: black;"> Customer Registration Form</h3>
<table style="background-color: white; color: black; padding: 10px; border-radius: 5px;">
<tr>
<td>Fullname:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input type="date"></td>
</tr>
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<input type="radio" name="gender">Other
</td>
</tr>
<tr>
    <tr>
    <td>Marital Status:</td>
    <td>
        <select name="marital_status" id="marital_status">
            <option value="single">Single</option>
            <option value="married">Married</option>
        </select>
    </td>
</tr>
<tr>
<td>Account Type:</td>
<td>
    <select name="account_type" id="account_type">
        <option value="savings">Savings</option>
        <option value="current">Current</option>
    </select>
</td>
</tr>
<tr>
<td>Initial Deposit Amount:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td><input type="number"></td>
</tr>
<tr>
<td>Email Address:</td>
<td><input type="email"></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Occupation:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>National ID (NID):</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Set Password:</td>
<td><input type="password"></td>
</tr>
<tr>
<td>Upload ID Proof:</td>
<td><input type="file"></td>
</tr>
<tr>
<td><input type="checkbox"> I agree to the terms and conditions</td>
</tr>

<tr>
    <td></td>
    <td><input type="Submit" value="Register" style="background-color: lightskyblue; color: white; padding: 2px;"></td>
    <td><input type="Reset" value="Clear" style="background-color: lightskyblue; color: white; padding: 2px;"></td>
</tr>
</table>
</body>
 
</html>
 