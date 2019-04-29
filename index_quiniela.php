<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body  style="background-color:WHITE;">
  <center>
<img src="img/2.png" alt="logo">
</center>


      <form method="POST" class="user" action="guardar_quiniela.php">

        <table align=center >
          <thead>
            <tr>
              <th colspan="3"><input required  style="width:560px;height:30px" type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Ingresa tu Nombre"></th>
            </tr>
            <tr>


              <th>LOCAL</th>
                <th>L=LOCAL,EMPATE,VISITANTE</th>
                  <th>VISITANTE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PUEBLA</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido1" name="partido1" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>TIGRES</td>
            </tr>
            <tr>
              <td>MORELIA</td>
              <td>  <input pattern="L|E|V" title="Unicamente ingresa valores L V E " required style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido2" name="partido2" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>TIJUANA</td>
            </tr>
            <tr>
              <td>PACHUCA</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido3" name="partido3" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>ATLAS</td>
            </tr>
            <tr>
              <td>AMERICA</td>
              <td>  <input pattern="L|E|V" title="Unicamente ingresa valores L V E " required style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido4" name="partido4" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>SANTOS</td>
            </tr>
            <tr>
              <td>MONTERREY</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required input style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido5" name="partido5" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>NECAXA</td>
            </tr>
            <tr>
              <td>CHIVAS</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required required input style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido6" name="partido6" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>LEON</td>
            </tr>
            <tr>
              <td>PUMAS</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required input style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido7" name="partido7" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>TOLUCA</td>
            </tr>
            <tr>
              <td>LOBOS BUAP</td>
            <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required input style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido8" name="partido8" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>CRUZ AZUL</td>
            </tr>
            <tr>
              <td>QUERETARO</td>
              <td><input pattern="L|E|V" title="Unicamente ingresa valores L V E " required input style="width:230px;height:15px" type="text" class="form-control form-control-user" id="partido9" name="partido9" placeholder="L=LOCAL E=EMPATE V=VISITANTE"></td>
              <td>VERACRUZ</td>
            </tr>
            <tr>

            </tr>
            <tr>
              <td></td>
              <td><button style="width:230px;height:40px" type="submit" class="btn btn-primary btn-user btn-block">
             Registrar Usuario
         </button></td>
         <td></td>
            </tr>
          </tbody>
        </table>




  </body>
</html>
