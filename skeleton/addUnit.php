<?php
   include('session.php');
?>

<html>
<head>
  <title>BCU Hacks Task Master</title>
  <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

  <body>
    <nav>
      <h1>Task Master Dashboard | Welcome, <?php echo $_SESSION['login_user']; ?></h1>
      <ul>
          <li><a href="welcome.php">Welcome</a></li>
          <li><a href="currentAssessment.php">Progress</a></li>
          <li><a href="newUser.php">New User</a></li>
          <li><a href="userOption.php">User Options</a></li>
          <li><a href="addUnit.php">New Project</a></li>
  		<li><a href="unitOptions.php">Project Options</a></li>
  		<li><a href="logout.php">Sign Out</a></li>
        </ul>
      </nav>

    <section id="header">
        <div id="header-content">
			<h4>
			<?php
      if($_SERVER['REQUEST_METHOD']=='POST') {
        $tbxUnit = $_POST['tbxUnit'];
        $tbxNoTasks = $_POST['tbxNoTasks'];
        $sql = "INSERT INTO `alexand2_bcuhacks`.`ProjectManagement` (`Unit`, `TaskAmount`) VALUES ($tbxUnit,$tbxNoTasks)";
      }
      if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
			?>
				<form method="post" action="">
					Add a Unit<br/>
					Unit: <input name="tbxUnit" type="text" /><br/>
					Number of Tasks: <input name="tbxNoTasks" type="text" /><br/>
					<input name="btnAdd" type="submit" value="Add Unit" onclick="sql()"/>
				</form>
			</h4>
		</div>
    </section>
   </body>
</html>
