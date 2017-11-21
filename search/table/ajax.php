<?php 
$conn = new pdo("mysql:host=localhost;dbname=serch", "root", "");
if(isset($_GET['q'])){
$q=$_GET['q'];
$sql1 =$conn->query("SELECT * FROM member Where username like '%$q%' ");
$sql1->execute();
$co=$sql1->fetchAll();
$cou=count($co);
if($cou>0){
  foreach ($co as $sql1) {

  echo "<a href='https://www.google.com'>".$sql1['username']."</a>".'<br>';

}
}
else{
  echo "ko t";
}
}



 ?>