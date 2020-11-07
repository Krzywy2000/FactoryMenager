<?php

    $connect = dbconnect();
    
    $freeSlots = $connect->prepare("SELECT `name`,`countOfFreePlaces` FROM `factories`");
    $freeSlots->execute();

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">Nazwa wydziału</th>
        <th scope="col">Ilość slotów</th>
      </tr>
    </thead><tbody>';
    while($freeSlotsFinish = $freeSlots->fetch())
    {
        echo "<tr>
        <td>".$freeSlotsFinish['name']."</td>
        <td>".$freeSlotsFinish['countOfFreePlaces']."</td>
        </tr>";
    }
    echo "</tbody></table>";

?>