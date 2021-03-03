<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../js/jquery-3.5.1.min.js"></script>
</head>
    <style>
        a{
            color: dimgray;
            font-size: 12px;
        }
        textarea{
            border: none;
            border-bottom: 2px solid #403E3E;
            width: 450px;
            margin-bottom: 10px;
            resize: none;
            outline: none;
        }
        button{
            border: none;
            padding: 10px;
            width: 115px;
            background-color: darkolivegreen;
        }
        button:hover{
            background-color: darkkhaki;
        }
    </style>
<body>

    <h2 class="result">Jquery eğitim seti</h2>
    <?php
        for($i=1;$i<=5;$i++){
            echo 'Bu bir yorumdur <br>
            <a onClick="show('.$i.');">YANITLA</a> <br>
            <div class="hide" id="answer'.$i.'">
                <textarea id="comment" name="comment"></textarea> <br>
                <button type="button" id="cancel" onClick="hide('.$i.');">İptal</button>
                <button type="button" id="answer">Yanıtla</button>
            </div>
            <br><br>';
        }
    ?>
    
    <script>
        $(function(){
            $(".hide").hide();
        });

        function show(ID) {
            $("#answer"+ID).show();
        }

        function hide(ID) {
            $("#answer"+ID).hide();
        }
    </script>
    
</body>
</html>