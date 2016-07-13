<h2  style="text-align: center; background: rgba(78, 217, 217, 0.91);"> LOG IN </h2>
<form id="userLoginForm" method="POST">
	<table width="100%">
		<tr>
			<td width="15%">Username:</td>
			<td>
				<input type="text" value="" placeholder="Enter Username" name="username" id="login_username">
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" value="" placeholder="Enter Password" name="pass1" id="login_pass1">
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<input type="button" id="userLogin_btn" value="Login!">

				<input type="hidden" id="dataSource" name="dataSource" value="userLogin"/>
			</td>
		</tr>
	</table>
</form>

<div style="text-align: center;text-decoration: none; font-size: 60px; border:solid 3px rgba(100, 153, 205, 0.6); width: 20%; margin: 0 auto; border-radius: 20px; background: rgb(130, 219, 241);"id="skipBtn"> <a href="partials/profileSkip.php" id="btnSk">SKIP  </a></div>
	
<style>
	#btnSk{
		text-decoration: none;
	}

</style>