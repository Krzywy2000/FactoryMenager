<?php

    $connect = dbconnect();
    
    $cityFactories = $connect->prepare("SELECT `city` FROM `factories` GROUP BY `city`");
    $cityFactories->execute();

    while($cityFactoriesFinish = $cityFactories->fetch())
    {
        echo "<H5>".$cityFactoriesFinish['city']."</H5>";
        $listFactories = $connect->prepare("SELECT * FROM `factories` WHERE `city` = :city");
        $listFactories->bindValue(":city",$cityFactoriesFinish['city'],PDO::PARAM_STR);
        $listFactories->execute();

        echo "<table class='table'>
        <tr>
            <th>Nazwa</th>
            <th>Ilość wolnych slotów produkcyjnych</th>
            <th>Ilość slotów prodkcyjnych ogółem</th>
            <th>Przejdź do zakładu</th>
        </tr>";
        while($listFactoriesFinish = $listFactories->fetch())
        {
            $id = $listFactoriesFinish['id'];
            echo "<tr>
                <td>".$listFactoriesFinish['name']."</td>
                <td>".$listFactoriesFinish['countOfFreePlaces']."</td>
                <td>".$listFactoriesFinish['countOfPlaces']."</td>
                <td><a href='indexMenager.php?page=factory?id=$id'><i class='fas fa-angle-double-right'></i></a></td>
            </tr>";
        }
        echo "</table>";
    }

?>