<?php 
include_once("mod/Book.php");
    include_once("mod/db_connect.php");
class Mod {
    

    public function getBookList($query)   
    {   
		      
		$allBooks = mysqli_query(DBLoger::$link, $query) or die("Ошибка " . mysqli_error($link)); 

		$rows = mysqli_num_rows($result); // количество полученных строк
     		
         
        return $allBooks;   
                  
}}   

	$con= new DBLoger();
	$con->DBlog();
	
	$query ="SELECT * FROM books";
	$selecti= new Mod();
	$selecti->getList($query);
	?>