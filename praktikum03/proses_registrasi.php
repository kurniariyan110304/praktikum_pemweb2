<?php
            if (isset($_POST["submit"])) {
                $nim = $_POST["nim"];
                $nama = $_POST["nama"];
                $jenkel = $_POST["jenkel"];
                $skill = $_POST["skill"];
                $domisili = $_POST["domisili"];
                $email = $_POST["email"]

                ?>
                <tr class="table table-secondary">
                    <td><?= $nim ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $jenkel ?></td>
                    <td><?= $skill ?></td>
                    <td><?= $domisili ?></td>
                    <td><?= $email ?></td>
                </tr>
                <?php }?>
