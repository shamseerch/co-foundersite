<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/freelancestyle.css">
</head>
<body>
<h1>EDIT FREELANCE DETAILS</h1>
<?php $this->load->helper('form');?>

<table border="2" align="center">
<?php
foreach ($a->result() as $row)
 {
 	$id=$row->Registration_id;
 	$name=$row->reg_name;
 	$Address=$row->Fl_addr;
 	$Age=$row->Fl_dob;
 	$email=$row->reg_email;
 	$category=$row->Fl_Category;
 	
 }
?>
<form  action="http://localhost/Co-founder/index.php/Admin/fupdate/<?php echo $id; ?>" method="POST" name="myform">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="Address" value="<?php echo $Address; ?>"></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="Age" value="<?php echo $Age; ?> "></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="Email" value="<?php echo $email; ?>"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category" value="<?php echo $category; ?>"></td>
		</tr>
		<tr>
		<td>
		<input type="submit" value="submit"></input></td>
		</tr>
		</form>
		</table>
		
</body>
</html>