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
             <?php if($dayOfWeek == "Friday" || $dayOfWeek == "Monday" || $dayOfWeek == "Wednesday"){ ?>
             <b>8:00 - 12:00</b> 
             <?php } else { ?>
               <b>Не рабочий день</b>
               <?php } ?>
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
            <?php if($dayOfWeek == "Tuesday" || $dayOfWeek == "Thursday" || $dayOfWeek == "Saturday"){ ?>
               <b>12:00 - 16:00</b>
               <?php } else { ?>
                  <b>Не рабочий день</b>
                  <?php } ?>
               </td>
      </tr>
   </table>
</body>
</html>


