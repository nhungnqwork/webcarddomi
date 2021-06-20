<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test card by Admin Domi</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<marquee style="font-size: 30px; color: royalblue;"> Welcome to Admin page !! 058.34.888.79 </marquee>
				<a href="http://webcarddomi.herokuapp.com/poedwpoeiwporiwpoir0394rwrjwjrlwedswjerwijeroiwueroiuw8349848340598395834095rifrojcflsdkkjldsjfsd/index.php"><button class="btn btn-outline-success"><b>HOME</b></button></a>	
				<form method="get">
				<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Search"> 
				</form>

			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead align="center">
						<tr>
							<th width="100px">z-index</th>
							<th>Seri</th>
							<th width="320px">Code</th>
							<th width="150px">Status</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
<?php
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from student';
}

$studentList = executeResult($sql);

$index = 1;
foreach ($studentList as $std) {
	echo '<tr align="center">
			<td>'.($index++).'</td>
			<td>'.$std['fullname'].'</td>
			<td>'.$std['age'].'</td>
			<td style="color: red;">'.$std['address'].'</td>
			<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
		</tr>';
}
?>


<!-- An element to toggle between password visibility -->
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('input.php', '_self')">Add New Card</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Do you want to delete this card ?')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete_student.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>



</body>
</html>
