<html>
   <head>
      <title>Register</title>
   </head>

   <body>
      <form action = "registered" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='name' /></td>
            </tr>
            <tr>
               <td>Email</td>
               <td><input type='text' name='email' /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type='password' name='password' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Register"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>