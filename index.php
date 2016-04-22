<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
?>

    <h1>
        FOOTBALL
    </h1>

    <p>
        football is played between two teams of five or eleven players each depends on the size of the field,
        one of whom is the goalkeeper. Unlimited substitutions are permitted in the 5 vs 5.
        Unlike some other forms of indoor football, the game is played on a hard court
        the small field surface delimited by lines; walls or boards are not used.
        the big field surface delimited by lines; walls or boards are not used.
    </p>

    <table class="form_member">
        <tr>
            <th>Times</th>
            <th>Venue</th>
            <th>Price</th>
        </tr>


        <?php
        foreach ($times as $time) {
            ?>
            <tr>
                <td><?= $time->getTime() ?></td>
                <td><?= $time->getVenue() ?></td>
                <td><?= $time->getPrice() ?></td>
            </tr>
            <?php
        }
        ?>

    </table>



<?php

require_once __DIR__ . '/../templates/footer.inc.php';