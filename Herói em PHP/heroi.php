<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/Comics-icon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP: Marvel & DC</title>
</head>
<body>
    <main>
        <?php
            if(!empty($_POST['nome_heroi'])){
                $nome_heroi = strtolower($_POST['nome_heroi']);
                $universo = strtolower($_POST['universo']);
                if($universo=="dc"){
                    switch($nome_heroi){
                        case "aquaman":
                            $img_heroi = "DC/aquaman.jpg";
                            break;
                        case "batman":
                            $img_heroi = "dc/batman.jpg";
                            break;
                        case "estelar":
                            $img_heroi = "dc/estelar.jpg";
                            break;
                        case "flash":
                            $img_heroi = "dc/flash.jpg";
                            break;
                        case "ravena":
                            $img_heroi = "dc/ravena.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }else if($universo=="marvel"){
                    switch($nome_heroi){
                        case "falcao":
                            $img_heroi = "marvel/falcao.jpg";
                            break;
                        case "hulk":
                            $img_heroi = "marvel/hulk.jpg";
                            break;
                        case "pantera":
                            $img_heroi = "marvel/pantera.jpg";
                            break;
                        case "tempestade":
                            $img_heroi = "marvel/tempestade.jpg";
                            break;
                        case "thor":
                            $img_heroi = "marvel/thor.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }

                ?>
                <section class="heroi"><?php mostrarHeroi($universo, $img_heroi); ?></section>
                <?php
            }else{
                $universo = $_POST['universo'];
                $img_heroi = "Digite um herói!!!";
                ?>
                <section class="heroi"><?php msgInvalido($universo, $img_heroi); ?></section>
                <?php
            }

            function mostrarHeroi($universo, $img_heroi){
                if($img_heroi=="Herói inválido."){
                    msgInvalido($universo, $img_heroi);
                }else{
                    ?>
                    <figure>
                        <img src="imgs/<?php echo $img_heroi; ?>" ><br>
                    </figure>
                    <a href="index.php" class="btn">Voltar</a>
                    <?php
                }
            }

            function msgInvalido($universo, $img_heroi){
                ?>
                <form action="universo.php" method="post">
                    <input type="hidden" name="universo" value="<?php echo $universo;?>">    
                    <h2>Tente outro nome</h2><br>
                    <h3><?php echo $img_heroi; ?></h3><br>
                    <input type="submit" value="Voltar" class="btn">
                </form>
                <?php
            }
        ?>

    </main>
</body>
</html>