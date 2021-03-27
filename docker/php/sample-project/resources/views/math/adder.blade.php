<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adder</title>
</head>
<body>
  <h1>Adder</h1>  
  <p> {{ $ans }}</p>

  <form action="/add" method="POST">
    @csrf
    <input type="number" name="right">
    <input type="number" name="left">
    <input type="submit">
  </form>

</body>
</html>