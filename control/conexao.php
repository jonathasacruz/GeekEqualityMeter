<?PHP

//local - Prof. Cloves
$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$dbname = "gem";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome_cad = $_POST['nome_cad'];
$email_cad = $_POST['email_cad'];
$login_cad = $_POST['login_cad'];
$senha_cad = $_POST['senha_cad'];


$sql = "INSERT INTO usuarios (nome, email, login, senha) VALUES ('$nome_cad','$email_cad', '$login_cad', '$senha_cad')";

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