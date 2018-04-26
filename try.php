	<form action="login.php" method="post" class="columnOffset-2 col-8">
			<div class="row">
				<label class="row">User Name
				<input type="text" name="userName"></label>
				<label class="row">Password
				<input type="password" name="password"></label>
			</div>
<div class="row">
				<input type="submit" class=" buttonBlock buttonDodgerBlue1" value="Go">
				</div>
			</form>
				<form action="registration.php" method="post" class="columnOffset-2 col-8">
			<div class="row">
				<label class="row">Full Name
				<input type="text" name="fullName" required></label>
				<label class="row">User Name
				<input type="text" name="userName" required></label>
				<label class="row">Address Line
				<textarea name="address" required></textarea></label>
				<label class="row">Email
				<input type="text" name="email" required></label>
				<label class="row">Password
				<input type="password" name="password" required></label>
				<label class="row">Phone Number
				<input type="number" name="phoneNo" required></label>
				<label class="row">About you
				<textarea name="about" required></textarea></label>
				<label class="row">Date of Birth
				<input type="date" name="dob" min="1950-01-01" required></label>
				<label class="row">Place of Birth
				<input type="text" name="pob" required></label>
				<label class="row">Father's Name
				<input type="text" name="fName" required></label>				
			</div>
<div class="row">
				<input type="submit" class=" buttonBlock buttonDodgerBlue1" value="Go">
				</div>
			</form>