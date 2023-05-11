<html>
   <head>
      <title>View People Records</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($people as $person)
         <tr>
            <td>{{ $person->id }}</td>
            <td>{{ $person->name }}</td>
            <td><a href = 'update/{{ $person->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>