<?php

    $connect = dbconnect();

    $finishVehicles = $connect->prepare("SELECT * FROM `listVehicles` WHERE `stan` = 'finish'");
    $finishVehicles->execute();

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">VIN</th>
        <th scope="col">Przewoźnik</th>
        <th scope="col">Data skończenia produkcji</th>
      </tr>
    </thead><tbody>';
    while($finishVehiclesFinish = $finishVehicles->fetch())
    {
        echo "<tr>
        <td>".$finishVehiclesFinish['VIN']."</td>
        <td>".$finishVehiclesFinish['client']."</td>
        <td>".$finishVehiclesFinish['dateOfFinish']."</td>
        </tr>";
    }
    echo "</tbody></table>";

?>