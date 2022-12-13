<div class="container">
    <div class="col s12 teal-text center">
        <h3>Relatórios.</h3>
    </div>      
    <div class="progress">
        <div class="determinate" style="width: 0%"></div>
    </div>

    <?php
    include_once 'config.php';

    $dash_preparacoes_query = "SELECT * FROM tb_preparacoes";
    $dash_preparacoes_query_run = mysqli_query($connect, $dash_preparacoes_query);

    if ($preparacoes_total = mysqli_num_rows($dash_preparacoes_query_run)) {
        echo '<h4>' . $preparacoes_total . ' preparações cadastradas</h4>';
    } else {
        echo '<h4>0 preparações cadastradas</h4>';
    }

    $dash_cardapios_query = "SELECT * FROM tb_cardapios";
    $dash_cardapios_query_run = mysqli_query($connect, $dash_cardapios_query);

    if ($cardapios_total = mysqli_num_rows($dash_cardapios_query_run)) {
        echo '<h4>' . $cardapios_total . ' cardápios cadastrados</h4>';
    } else {
        echo '<h4>0 cardápios cadastrados</h4>';
    }
    ?>


</div>