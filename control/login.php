<?PHP

$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$dbname = "gem";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login = $_GET['login'];
$senha= $_GET['senha'];


$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=../meter.html">';
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    } else {
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=../view/erro.html">';
    //echo "0 results";
}

/*if (mysqli_query($conn, $sql)) {
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);

/*
$_GET['nome'] = $nome;
$_GET['login'] = $login;
$_GET['email'] = $email;
$_GET['senha'] = $senha_cad;
*/
?>