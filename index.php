<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculo.php" method="POST">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">TDE's</th>
                <th scope="col">AVP's</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "tde1" placeholder="TDE 1"><br></td>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "avp1" placeholder="AVP 1"><br></td>
            </tr>

            <tr>
                <th  scope="row"></th>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "tde2" placeholder="TDE 2"><br></td>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "avp2" placeholder="AVP 2"><br></td>
            </tr>

            <tr>
                <th scope="row"></th>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "tde3" placeholder="TDE 3"><br></td>
            </tr>

            <tr>
                <th scope="row"></th>
                <td>
                    <input id="tde" type="number" min="0" step="any" name = "tde4" placeholder="TDE 4"><br></td>
            </tr>
            
            </tbody>
        </table>
        <input id="btn" style="margin-left: 45px;" value="CALCULAR" type ="submit">
      </form>
</body>
</html>