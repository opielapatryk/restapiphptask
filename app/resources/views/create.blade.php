<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h2>Create person</h2>
    <form method="POST" action="/create">
      @csrf
      <input type="text" name="name" placeholder="name">
      <input type="text" name="phone" placeholder="phone">
      <input type="text" name="street" placeholder="street">
      <input type="text" name="city" placeholder="city">
      <input type="text" name="country" placeholder="country">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <button>Create</button>
    <form>
</body>
</html>