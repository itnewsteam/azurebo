<html>   
	<head>
	</head>   
   
<body>   
   
    <table>   
	<tbody>
	<tr>
		<td><b>BookID </b></td>
		<td><b>BookTitle</b></td>
		<td><b>BookDescription</b></td>
		<td><b>BookYear</b></td>
		<td><b>BookPages</b></td>
	</tr>
	</tbody>   
	
        <?php    
   
            foreach ($books as $title => $book)   
            {   
				echo "<dt>$title:</dt>"; 

				echo "<dd>$book</dd>"; 

                  
            }   
   
        ?>   
    </table>   
   
</body>

  </html>   