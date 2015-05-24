<?PHP
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("Company", $connection); // Selecting Database from Server
//if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$CompName = $_GET['cName'];
$compDesc = $_GET['cDesc'];
$compProduct = $_GET['cProd'];
$skills = $_GET['skills'];
if($CompName !=''||$prod !=''){
//Insert Query of SQL
$query = mysql_query("insert into Company(id,name,desp,prod,skill) values ('$CompName','$compDesc ','$compProduct','$skills')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>



