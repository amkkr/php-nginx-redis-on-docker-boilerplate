<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sample/input</title>
  <style>
    body {
      font-size: 16pt;
      color: gray;
    }
  </style>
</head>

<body>
  <h1>input</h1>
  <form action="{{route('save')}}" method="post">
    @csrf
    <tr>
      <th>input:</th>
      <td><input type="text" name="content"></td>
    </tr>
    <input type="submit" value="push">
  </form>
</body>

</html>