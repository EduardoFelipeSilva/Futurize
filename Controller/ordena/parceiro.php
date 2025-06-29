    <?php
    
    include_once __DIR__ . "/../database.php";
    $conn = mysqli_connect($serve, $serve_user, $serve_password, $database_name);

    $ordenarPor = $_GET['ordenarPor'] ?? 'pco_Id';
    $ordem = ($_GET['ordem'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

    $colunasPermitidas = ['pco_Id', 'pco_Nome', 'pco_Area', 'pco_Status'];
    $ordenarPorSeguro = in_array($ordenarPor, $colunasPermitidas) ? $ordenarPor : 'pco_Id';
    $ordemSeguro = $ordem;

    $sql = "SELECT * FROM parceiro";

    if (!empty($_GET['buscaParceiro'])) {
        $busca = mysqli_real_escape_string($conn, $_GET['buscaParceiro']);
        $sql .= " WHERE pco_Nome LIKE '%$busca%'";
    }

    $sql .= " ORDER BY $ordenarPorSeguro $ordemSeguro";

    $consultaParceiros_bd = mysqli_query($conn, $sql);

    ?>