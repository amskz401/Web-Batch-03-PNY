<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>
	<header></header>
	<div class="container">
		<form>
			<!-- text form string values -->
			<p>
				<!-- <label>Enter Your Full Name</label> -->
				<input type="text" name="full_name" placeholder="Enter Your Full Name">
			</p>

			<!-- for email input -->
			<p>
				<input type="email" placeholder="Enter Email" name="user_email">
			</p>
			<!-- number input -->
			<p>
				<input type="number" name="">
			</p>
			<!-- date -->
			<p>
				<input type="date" name="">
			</p>

			<!-- radio -->
			<p >
				male <input type="radio" name="gender">
				female <input type="radio" name="gender">
			</p>

			<!-- checkbox -->
			<p>
				cricket <input type="checkbox" name="">
				cricket <input type="checkbox" name="">
				cricket <input type="checkbox" name="">
				cricket <input type="checkbox" name="">
				cricket <input type="checkbox" name="">
			</p>

			<!-- dropbox -->
			<p>
				<select>
					<option>male</option>
					<option>female</option>
				</select>
			</p>

			<!-- color -->
			<p>
				<input type="color" name="">
			</p>

			<!-- load file -->
			<p>
				<input type="file" name="">
			</p>

			<!-- input type password -->
			<p>
				<input type="password" name="">
			</p>

			<!-- range -->
			<input type="range" name="">
			<input type="hidden" name="student_id" value="15">
			<input type="reset" name="">
			<input type="submit" name="">
		</form>
	</div>
	<footer></footer>
</body>
</html>