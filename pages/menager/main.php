<section>
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <div class="col-md-5 window">
                <div class="heading">
                    <H4>Nowe zamówienia:</H4>
                </div>
                <div>
                    <?php
                        include("./scripts/php/queries/main/newOrders.php");
                    ?>
                </div>
            </div>
            <div class="col-md-5 window">
                <div class="heading">
                    <H4>Gotowe do odbioru:</H4>
                </div>
                <div>
                    <?php
                        include("./scripts/php/queries/main/finishVehicles.php");
                    ?>
                </div>
            </div>
            <div class="col-md-5 window">
                <div class="heading">
                    <H4>Wolne sloty w zakładach:</H4>
                </div>
                <div>
                    <?php
                        include("./scripts/php/queries/main/freeSlots.php");
                    ?>
                </div>
            </div>
            <div class="col-md-5 window">
                <div class="heading">
                    <H4>Produkcja w tym miesiącu</H4>
                </div>
                <div>
                    <?php
                        include("./scripts/php/queries/main/statistic.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>