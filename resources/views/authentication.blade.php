<html>
   
   <head>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>