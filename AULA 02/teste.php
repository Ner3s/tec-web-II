<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teste de Página</title>
</head>
<body>

   <h1>HTML e PHP</h1>

<!--
   
   <?php
    for($x=0;$x<10;$x++){
        echo "<br>teste $x";
    }
   ?>

   <script>
        switch(new Date().getDay()){
            case 0:
                day = "Domingo";
                break;

            case 1:
                day = "Segunda";
                break;

            case 2:
                day = "Terça";
                break;

            case 3:
                day = "Quarta";
                break;

            case 4:
                day = "Quinta";
                break;

            case 5:
                day = "Sexta";
                break;

            case 6:
                day = "Sábado";
                break;
        }
        alert(day);
   </script>

 
 
    <input type=number id=valor>
    <button onclick=exibe()>exibir</button>
    <script>
        function exibe(){
            var x = document.getElementById("valor");
            alert("Valor "+x.value);
        }
    </script>
-->
    <div id=exibe></div>
    <script>
        var texto='', i=0;
         
        /*
        while(i<10){ //enquanto 
            texto += "<p>numero= "+i+"</p>";
            i++;
        }
        document.getElementById("exibe").innerHTML = texto;
        */
        /*
        do{
            texto += "<p>numero= "+i+"</p>";
            i++;
        }while(i<10); //repita até que
        document.getElementById("exibe").innerHTML = texto;
        */

        for(i=0; i<10; i++){
            texto += "<p>numero= "+i+"</p>";
        }
        document.getElementById("exibe").innerHTML = texto;
    </script>
</body>
</html>