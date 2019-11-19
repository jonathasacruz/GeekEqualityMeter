<?PHP

$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$dbname = "gem";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login = $_POST['login'];
$senha= $_POST['senha'];


$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login','$senha')";

//mysql_query($sql,$conn);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*
$_GET['nome'] = $nome;
$_GET['login'] = $login;
$_GET['email'] = $email;
$_GET['senha'] = $senha_cad;
*/
?>