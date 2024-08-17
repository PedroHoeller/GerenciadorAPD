<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include "./header.php" ?>
    <section class="form">
        <div class="left">
            <form id="form" action="action.php" method="POST">
                <div id="estadosContainer">
                    <h2>Estados</h2>
                    <button type="button" id="addEstadoBtn">Adicionar Estado</button>
                </div>
            </form>
        </div>
        <div class="right">
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="text" name="string" id="string" placeholder="String">
            <input type="text" name="estado_inicial" id="estado_inicial" placeholder="Estado Inicial">
            <input type="text" name="estado_final" id="estado_final" placeholder='Estado Final separe por ","'>
            <input type="text" name="pilha_inicial" id="pilha_inicial" placeholder='Pilha Inicial (separado por ",")'>
            <input type="text" name="alfabeto" id="alfabeto" placeholder='Alfabeto (separado por ",")'>
            <input type="text" name="alfabeto_pilha" id="alfabeto_pilha" placeholder='Alfabeto de pilha (separado por ",")'>
            <button type="button" id="savedata" class="green">Salvar</button>
            <button type="submit" id="validate">Validar</button>
            <button type="button" id="gerar_ap">Gerar AP formal</button>
            <button type="button" id="gerar_diagrama">Gerar diagrama formal</button>
            <a class="btn grey" href="./" id="voltar">Voltar</a>
        </div>
    </section>
    <div id="diagramaFather"></div>
    <?php include "./footer.php" ?>
</body>
</html>
