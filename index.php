<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">


        <title> PSEUDO </title>


        
    </head>

<body>
    <div class="header">
        <h1>PSEUDO</h1>
        <p>Elektronski sistem za zapošljavanje prosvjetnih radnika</p>
    </div>
    
    <div class="mainMenu">
        
        <div class="button">

            <table class="mainMenu">
                <tr> <!--Dugme za prijavu kandidata-->
                    <td class="td1">
                        <input type="button" name="SignUp" value="Nova prijava">
                    </td>

                    <td class="td2" title="Priajva novog kandidata u sistem"> <!--Moguća izmjena-->
                        *
                    </td>
                </tr>

                <tr> <!--Dugme za status na rang listi-->
                    <td class="td1">
                        <input type="button" name="Status" value="Status na listama">
                    </td>
                    
                    <td class="td2" title="Status kandidata na rang listama"> <!--Moguća izmjena-->
                        *
                    </td>
                </tr>

                <tr> <!--Dugme za odjavu sa sistema, MOGUĆE UKLONITI-->
                    <td class="td1">
                        <input type="button" name="LogOut" value="Odjava">
                    </td>

                    <td class="td2" title="Odjava sa sistema"> <!--Moguća izmjena-->
                        *
                    </td>

                </tr>
            </table>
        </div>
    </div>

    <?php 

    echo "Hello World"

    ?>

    

</body>

</html>