


<html>
<head>
<title>Example of get method</title>
 </head>
<body>
<form method="post" enctype="multipart/form-data">
<table border="20" align="center" width="60%" >
<tr> 
    <td> name </td>
   <td><input type="text" placeholder="Enter your name" name="name" /> </td>
 </tr> 
 
 <tr> 
    <td> password </td>
   <td><input type="password" placeholder="Enter your password" name="password" /> </td>
 </tr>
 
<tr> 
    <td> Address </td>
   <td><textarea  placeholder="Enter your address" name="address"> </textarea> </td>
 </tr>
 
 <tr> 
    <td> gender </td>
   <td>male<input type="radio" name="gender" value="male"/> female<input type="radio" name="gender"value="female" /></td>
 </tr>
 
 <tr> 
    <td> FILE </td>
   <td><input type="file" name="userfile" value="INSERT FILE"/> </td>
 </tr>
  
<tr>  
   <td colspan="2" align="center"><input type="submit" name="submit" value="submit" /></td>
 </tr>
 </table>
 </form>

</body>  
</html>  

<?php
   if(isset($_POST["submit"]))
   {
     $_SESSION["sname"]=$_POST['name'];
     $_SESSION["saddress"]=$_POST['address'];
      header('location:welcome.php');
    }

?>
