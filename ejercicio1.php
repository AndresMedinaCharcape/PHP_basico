<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="descripcion" content="Ejercicio de tablas">
    <style>
        table {
            border : 1px solid #bbb;
            margin-bottom: 1em;
            border-collapse: collapse;
            width: 100%;
        }
        tr {
            border: 1px solid #bbb;
            line-height: 1.7;
            text-align: center;
        }
        tr  :hover{
            background: #eee;
        }
        .columna3 {
            background: yellow;
        }
    </style>
</head>
<body>
    <h1>Ejercicio1: Mostrar en una tabla de 10 por 10 con los numeros del 1 al 100</h1>
    <table>
        <colgroup>
        <col>
        <col>
        <col class="columna3">
        </colgroup>
        <?php 
        $num = 0;
        for ($f=0; $f<10; $f++)
        { 
            echo '<tr>';
            for ($c=0;$c<10;$c++)
            {
                $num++;
                echo  '  <td> ' . ($num) . '</td> ' ;
               
            }
            echo '</tr>';
            
        } ?>
        
        
    </table>
       
</body>
</html>