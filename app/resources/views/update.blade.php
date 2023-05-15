<html>
   
   <head>
      <title>Person Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/{{$people[0]->id}}" method = "post">
         @csrf
         @method("PUT")
      
         <table>
            <tr>
               <td>Name</td>
               <td>phone</td>
               <td>street</td>
               <td>city</td>
               <td>country</td>
               <td>email</td>
               <td>password</td>
               
            </tr>
            <tr>
               <td>
                  <input type = 'text' name ='name' 
                     value = '{{$people[0]->name}}'/>
               </td>
               <td>
                  <input type = 'text' name = 'phone' 
                  value = '{{$people[0]->phone}}'/>
               </td>
               <td>
                  <input type = 'text' name = 'street' 
                  value = '{{$people[0]->street}}'/>
               </td><td>
                  <input type = 'text' name = 'city' 
                  value = '{{$people[0]->city}}'/>
               </td><td>
                  <input type = 'text' name = 'country' 
                  value = '{{$people[0]->country}}'/>
               </td><td>
                  <input type = 'email' name = 'email' 
                  value = '{{$people[0]->email}}'/>
               </td><td>
                  <input type = 'password' name = 'password' 
                  value = '{{$people[0]->password}}'/>
               </td>
            </tr>
            <tr>
               <td>
                  <button>Update person</button>
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>