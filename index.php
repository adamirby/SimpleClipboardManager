<?php
	session_start();
	include 'inc/header.php';
?> 
        <div class="container">
            <div class="jumbotron">
                <h2>Simple Clipboard Manager Login</h2>
            </div>
            <form method="POST" action="loginProcess.php">
                <div class="form-group">
                    <span class="adminPrompt">Username:</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="username" class="form-control"/> <br />
                    </div>
                </div>
                
                <div class="form-group">
                    <span class="adminPrompt">Password: </span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control"/> <br />
                    </div>
                </div>
                <div class="btn-group">
                    <div class="col-md-4">        
                        <input type="submit" name="submitForm" value="Login" class="btn btn-default"/>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="col-md-4">
                    	<input type="submit" name="registerForm" value="Register" class="btn btn-default" /> 
                    </div>
                </div>
                <br /><br />
                <?php
                    if($_SESSION['incorrect']){
                        echo "<p class='lead' id='error' style='color:red'>";
                        echo "<strong>Incorrect Username or Password!</strong></p>";
                    }
                    if($_SESSION['used']){
                    	echo "<p class='lead' id='error' style='color:red'>";
                    	echo "<strong>Username already used!</strong></p>";
                    }
                ?>
            </form>
        </div>

<?php
	include 'inc/footer.php';
?>