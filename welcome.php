
<?php
session_start();
{
if(isset($_SESSION["sname"]))
{
?>
<h2> <a href="logout.php" style="float:right" >logout </a> </h2>
<h1 align="center">
<?php
echo "YOU ARE ALREADY LOGGED IN";
}
else
{?>
<h2><a href="index.php" style="float:right" >log in </a> </h2>
<h1 align="center">
<?php
echo "YOU ARE NOT LOGGED IN";
}
}
?>
</h1>
<h2>

</h2>
