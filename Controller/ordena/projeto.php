    <?php
    
    include_once __DIR__ . "/../database.php";
    $conn = mysqli_connect($serve, $serve_user, $serve_password, $database_name);

    $ordenarPor = $_GET['ordenarPor'] ?? 'pjt_Id';
    $ordem = ($_GET['ordem'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

    $colunasPermitidas = ['pjt_Id', 'pjt_Preco', 'pjt_DataInicio', 'pjt_DataTermino', 'pjt_Status'];
    $ordenarPorSeguro = in_array($ordenarPor, $colunasPermitidas) ? $ordenarPor : 'pjt_Id';
    $ordemSeguro = $ordem;

    $sql = "SELECT * FROM projeto";

    if (!empty($_GET['buscaProjeto'])) {
        $busca = mysqli_real_escape_string($conn, $_GET['buscaProjeto']);
        $sql .= " WHERE pjt_Nome LIKE '%$busca%'";
    }

    $sql .= " ORDER BY $ordenarPorSeguro $ordemSeguro";

    $consultaProjetos_bd = mysqli_query($conn, $sql);

    ?>