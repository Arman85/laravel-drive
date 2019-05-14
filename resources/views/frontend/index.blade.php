<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Laravel google drive</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<h4>Laravel drive</h4>
			<form action="/put">
				<div class="custom-file">
					<input type="file" name="file" class="custom-file-input" id="validateCustomFile">
					<label class="custom-file-label" for="validateCustomFile">Choose file</label>
					<div class="invalid-feedback">Выберите файл</div>
				</div>
				<div class="form-group">
					<button type="submit">Send</button>
				</div>
			</form>
			<div class="content">
				<h5>Content</h5>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>