<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
    </head>
<body>
    <script>
        var nome_vetor = new Array();
        var nome_vetor1 = [];

        nome_vetor[0] = "teste 1";
        console.log(nome_vetor[0]);
        nome_vetor[0] = "teste 1";
        nome_vetor[1] = "teste 2";
        console.log(nome_vetor.length);
        nome_vetor.push("Item 1");
        nome_vetor.push("Item 2");
        nome_vetor.push("Item 3");
        nome_vetor.pop();
        console.log(nome_vetor.length);

        delete nome_vetor[0];

        var objeto_estruturado = {
            "Nome" : " Andre",
            "Idade" : 42,
            "Cidade" : " Rio de Janeiro"
        };

        console.log(objeto_estruturado);
        console.log(objeto_estruturado.Nome);

        var texto = JSON.stringify(objeto_estruturado);

        var objeto = JSON.parse(texto);
        console.log(objeto.Nome);
    </script>
</body>
</html>