<?php if (isset($_SESSION['message'])) : ?>

            <?php
            echo "<script type='text/javascript'>toastr.success( '{$_SESSION['message']}' )</script>";
            unset($_SESSION['message']);
            ?>

<?php endif ?>

<?php if (isset($_SESSION['error'])) : ?>

            <?php
            echo "<script type='text/javascript'>toastr.error( '{$_SESSION['error']}' )</script>";
            unset($_SESSION['error']);
            ?>

<?php endif ?>
