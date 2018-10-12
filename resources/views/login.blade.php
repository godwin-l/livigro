<html>
   <head>
      <title>Login</title>
   </head>

   <body>
      <form action = "" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
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
                  <input type = 'submit' value = "Login"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>