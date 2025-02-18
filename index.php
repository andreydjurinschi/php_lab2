<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Lab02</title>
</head>
<body>
   <table>
      <tr>
         <th>
            №
         </th>
         <th>
            Имя
         </th>
         <th>
            График работы
         </th> 
      </tr>
      <?php $dayOfWeek = date("l"); ?>
      <tr>
         <td>
         1
         </td>
         <td>
         John Styles
         </td>
         <td>
            <?php
            switch ($dayOfWeek) {
               case 'Monday':
                  echo "8:00 - 12:00";
                  break;
               case 'Wednesday':
                     echo "8:00 - 12:00";
                  break;
               case 'Friday':
                     echo "8:00 - 12:00";
                  break;
               default:
                     echo "Не рабочий день";
                  break;
            }
            ?>
         </td>
      </tr>
      <tr>
         <td>
         2   
         </td>
         <td>
            Jane Doe
         </td>
         <td>
         <?php
            switch ($dayOfWeek) {
               case 'Tuesday':
                     echo "12:00 - 16:00";
               break;
               case 'Thursday':
                     echo "12:00 - 16:00";
               break;
               case 'Saturday':
                  echo "12:00 - 16:00";
               break;
               default:
                     echo "Не рабочий день";
                  break;
            }
            ?>
         </td>
      </tr>
   </table>
</body>
</html>


