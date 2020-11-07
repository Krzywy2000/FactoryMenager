<?php

    $connect = dbconnect();

    $newOrders = $connect->prepare("SELECT * FROM `orders` WHERE `stan` = 'new'");
    $newOrders->execute();

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">Model</th>
        <th scope="col">Wersja</th>
        <th scope="col">Ilość sztuk</th>
        <th scope="col">Info</th>
      </tr>
    </thead><tbody>';
    while($newOrdersFinish = $newOrders->fetch())
    {
        echo "<tr>
        <td>".$newOrdersFinish['model']."</td>
        <td>".$newOrdersFinish['version']."</td>
        <td>".$newOrdersFinish['count']."</td>
        <td><a class='fas fa-info' href='indexMenager.php?page=newOrder?id=".$newOrdersFinish['id']."'></a></td>
        </tr>";
    }
    echo "</tbody></table>";

?>