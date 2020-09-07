<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <div id=exibe></div>
    <script>
        var texto="", i=0;

        //AULA 03

        /* ::: WHILE :::
        while(i < 10){
            texto += "<p>Número="+ i +"</p>";
            i++;
        }
        */

        /* ::: DO WHILE :::
        do{
            texto += "<p>Número="+ i +"</p>";
            i++;
        }while(i<10);
        */

        // ::: FOR :::
        for (i=0; i<10; i++){
            texto += "<p>Número="+ i +"</p>";
        }
        document.getElementById("exibe").innerHTML = texto;

    </script>
</body>
</html>