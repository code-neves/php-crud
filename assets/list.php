<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>




    $sql = "SELECT * FROM usuarios";

    $result = $conn->query($sql);

    $qtd = $result->num_rows;

    


    print"<table class=aside-title>";

    if($qtd > 0){
        while($row = $result->fetch_object()){
            print "<tr>";
            print "<td>".$row->id. "</td>";
            print "<td>".$row->email. "</td>";
            print "</tr>";
       
        }
        print("</table>"); }  
        else  
        {
        echo "<p class='sem-cad'>Não há cadastros no momento</p>";
    }
    
?>