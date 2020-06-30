<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SanberBook | Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
		<label>First name:</label>
		<p><input type="text" name="first_name"></p>
		
		<label>Last name:</label>
		<p><input type="text" name="last_name"></p>
		
		<label>Gender:</label>
		<p><input type="radio" name="gender">Male</p>
		<p><input type="radio" name="gender">Female</p>
		<p><input type="radio" name="gender">Other</p>
		
		<label>Nationality:</label>
		<p>
			<select name="nationality">
				<option>Indonesian</option>
				<option>Malaysia</option>
				<option>Singapore</option>
			</select>
		</p>

		<label>Language Spoken:</label>
		<p><input type="checkbox" name="indonesia">Bahasa Indonesia</p>
		<p><input type="checkbox" name="english">English</p>
		<p><input type="checkbox" name="other">Other</p>

		<label>Bio:</label>
		<p><textarea name="bio" rows="5"></textarea></p>

		<button>Sign Up</button>
	</form>
</body>
</html>