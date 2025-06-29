    <?php
    
    include_once __DIR__ . "/../database.php";
    $conn = mysqli_connect($serve, $serve_user, $serve_password, $database_name);

    $ordenarPor = $_GET['ordenarPor'] ?? 'usr_Id';
    $ordem = ($_GET['ordem'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

    $colunasPermitidas = ['usr_Id', 'usr_Nome', 'usr_Area', 'usr_Nivel', 'usr_Status'];
    $ordenarPorSeguro = in_array($ordenarPor, $colunasPermitidas) ? $ordenarPor : 'usr_Id';
    $ordemSeguro = $ordem;

    $sql = "SELECT * FROM usuario";

    if (!empty($_GET['buscaUsuario'])) {
        $busca = mysqli_real_escape_string($conn, $_GET['buscaUsuario']);
        $sql .= " WHERE usr_Nome LIKE '%$busca%'";
    }

    $sql .= " ORDER BY $ordenarPorSeguro $ordemSeguro";

    $consultaUsuarios_bd = mysqli_query($conn, $sql);

    ?>