<html>
  <head>
    <title>Under Construction</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  </head>

  <body>
    <nav>
      <h1>Task Master</h1>
	  <ul>
        <li><a href="welcome.php">Welcome</a></li>
        <li><a href="currentAssessment.php">Progress</a></li>
        <li><a href="newUser.php">New User</a></li>
        <li><a href="userOption.php">User Options</a></li>
        <li><a href="addUnit.php">New Project</a></li>
		<li><a href="unitOptions">Project Options</a></li>
		<li><a href="logout.php">Sign Out</a></li>
      </ul>
    </nav>

    <section id="header">
        <div id="header-content">
			<h4>
				Current progress<br>
				<table style="width: 100%">
				<tr>
					<td colspan="2">Unit: &lt;set by database&gt;<br />
					Assignment: &lt;set by database&gt;</td>
				</tr>
				<tr>
					<td>Task</td>
					<td>Percentage completed</td>
				</tr>
				<tr>
					<td style="width: 416px">&lt;set by database&gt;</td>
					<td>
						<form method="post">
							<div class="auto-style1">
							<select name="Select1">
								<option>0</option>
								<option>25</option>
								<option>50</option>
								<option>75</option>
								<option>100</option>
							</select>
							</div>
						</form>
					</td>
				</tr>
				<tr>
					<td style="width: 416px">&lt;rows set by database&gt;</td>
					<td class="auto-style1">
						<select name="Select2">
							<option>0</option>
							<option>25</option>
							<option>50</option>
							<option>75</option>
							<option>100</option>
						</select>
					</td>
				</tr>
				</table>
			</h4>
		</div>
    </section>



   </body>
</html>
