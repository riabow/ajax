<?php
include "connect.inc";

$sql = " SELECT `id`, `name`, `email`, `text`, `dt` FROM `comments`.`cmt` order by id desc ";
$result = $conn->query($sql);
// print_r($result);

if ($result->num_rows > 0) {
    $tab = "<table border=1 ><tr> <td>имя</td> <td>дата</td> <td>email</td> <td>комментарий</td> </tr>";
   
    while($row = $result->fetch_assoc()) {
      $dtf = (new DateTime($row['dt'] ))->format('d.m.Y H:i:s');// как просили 

      $tab .= "<tr><td>". $row['name'] ."</td> <td>". $dtf ."</td> <td>". $row['email'] ."</td>  <td>". $row['text'] ."</td> </tr>";
    }
    echo $tab; 
} else {
    echo "no comments";
}


$conn->close();
