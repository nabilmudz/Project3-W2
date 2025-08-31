<!DOCTYPE html>
<html>
   <style>
      table{
         color: green;
      }
   </style>
   <body>
      <table border="1">
         <tr>
            <td>nama</td>
            <td>nim</td>
            <td>umur</td>
         </tr>
         <?php
            $i = 1;
            while($i <= 5){
         ?>
         <tr>
            <td>Nabil</td>
            <td>021</td>
            <td>19</td>
         </tr>
      <?php
            $i++;
         }
      ?>
      </table>
   </body>
</html>