<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="anoceanofsky.css" />
<title>Adan and Salvador University</title>
</head>
</html>
<?php 
function execute($arg) {
	$command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar DBProject5 ';
	echo $command;
	for ($i = 0; $i < count($arg); $i++) {
		$arg[$i] = escapeshellarg($arg[$i]);
		$command = $command . $arg[$i] . ' ';
	}
		
	$command = escapeshellcmd($command);
	echo "<p>command: $command </p>";
	system($command);
}


if (isset($_REQUEST['choice'])) {
	$choice = $_REQUEST['choice'];
	if ($choice == 1) { ?>
	
<html>	
	<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=1">Add Student</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=2">Add Course</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=3">Enrollment</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=4">All Students</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=5">All Courses</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=6">Student Classes</a></div>
	</div>
</body>
</html>
	
		<form action="DBProject5.php?choice=1" method="post">
			Add a Student to the student table<br>
		    Student Name: <input type="text" name="name"><br>
		    Student ID: <input type="text" name="ID"><br>
		    Major: <input type="text" name="major"><br>
		    <input type="hidden" name="set" value="yes">
		    <input name="submit" type="submit" >
		</form>
		<br><br>
		<?php
		if (isset($_POST['set'])) {
			$input = array($_REQUEST['choice'], $_REQUEST['name'], $_REQUEST['ID'], $_REQUEST['major']);
	 		execute($input);          
		}
	}
	
	elseif ($choice == 2) { ?>
	
	<html>	
	<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=1">Add Student</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=2">Add Course</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=3">Enrollment</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=4">All Students</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=5">All Courses</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=6">Student Classes</a></div>
	</div>
	</body>
	</html>
	
		<form action="DBProject5.php?choice=2" method="post">
			Add a Course to the Course Table<br>
		    Department Code: <input type="text" name="code"><br>
		    Course Number: <input type="text" name="courseNo"><br>
		    Course Title: <input type="text" name="title"><br>
		    Credit Hours: <input type="text" name="hours"><br>
		    <input type="hidden" name="set" value="yes">
		    <input name="submit" type="submit" >  
		</form>
		<br><br> 
		<?php
		if (isset($_POST['set'])) {
			$input = array($_REQUEST['choice'], $_REQUEST['code'], $_REQUEST['courseNo'], $_REQUEST['title'], $_REQUEST['hours']);
	 		execute($input);          
		}
	}
	
	elseif ($choice == 3) { ?>
	
	<html>	
	<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=1">Add Student</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=2">Add Course</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=3">Enrollment</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=4">All Students</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=5">All Courses</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=6">Student Classes</a></div>
	</div>
	</body>
	</html>
	
		<form action="DBProject5.php?choice=3" method="post">
			Enrollment<br>
		    Enter Student ID: <input type="text" name="studentID"><br>
		    Enter Department Code: <input type="text" name="deptCode"><br>
		    Course Number: <input type="text" name="courseNumber"><br>
		    <input type="hidden" name="set" value="yes">
		    <input name="submit" type="submit" >  
		</form>
		<br><br> 
		<?php
		if (isset($_POST['set'])) {
			$input = array($_REQUEST['choice'], $_REQUEST['studentID'], $_REQUEST['deptCode'], $_REQUEST['courseNumber']);
	 		execute($input);          
		}
	}
	
	elseif ($choice == 4) {
	
		$input = array($_REQUEST['choice']);
	 	execute($input);      
	}
	
	elseif ($choice == 5) { ?>
	
	<html>	
	<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=1">Add Student</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=2">Add Course</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=3">Enrollment</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=4">All Students</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=5">All Courses</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=6">Student Classes</a></div>
	</div>
	</body>
	</html>
	
		<form action="DBProject5.php?choice=5" method="post">
			Enter which department you would like to view the courses from:<br>
			<input type="text" name="deptCode">
			<input type="hidden" name="set" value="yes">
			<input name="submit" type="submit" >  
			</form>
		<br><br> 
		<?php
		if (isset($_POST['set'])) {
			$input = array($_REQUEST['choice'], $_REQUEST['deptCode']);
	 		execute($input);          
		}
	}
	
	elseif ($choice == 6) { ?>
		
		<html>	
	<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=1">Add Student</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=2">Add Course</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=3">Enrollment</a></div>
        <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=4">All Students</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=5">All Courses</a></div>
	    <div class="topNaviagationLink"><a href="http://www.csce.uark.edu/~arutiaga/project_java/DBProject5.php?choice=6">Student Classes</a></div>
	</div>
	</body>
	</html>
		
		<form action="DBProject5.php?choice=6" method="post">
			Enter the ID of the student you would like to learn more about:<br>
			<input type="text" name="studentID">
			<input type="hidden" name="set" value="yes">
			<input name="submit" type="submit" >  
			</form>
		<br><br>
		<?php
		if (isset($_POST['set'])) {
			$input = array($_REQUEST['choice'], $_REQUEST['studentID']);
	 		execute($input);          
		}
	} 
}
?>
<a href="http://www.csce.uark.edu/~arutiaga/project_java/">Home</a>
