<?php
$is_home = false;
?>


<?php include "../components/head.php" ?>
<style>

    th, td{
        padding: 10px !important;
        text-align: center;
        border: 1px solid rgba(0,0,0,0.3);
    }

</style>

<body>
    <?php include "../components/header.php" ?>


    <div class="bg-[#FFE3D7] min-h-[600px] text-[0.8em] flex-col p-10 max-w-[100%] overflow-x-auto">
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Medical ID</th>
                <th>Blood Group</th>
                <th>Organs</th>
                <th>Weight</th>
                <th>Height</th>
            </tr>
            <?php

            include "../sql/db.php";

            $stmt = $db->prepare("SELECT * FROM `pledges`");
            $result = $stmt->execute();
            if ($result) {
                $rows = $stmt->get_result();
                foreach ($rows as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['full_name'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['medical_id'] . "</td>";
                    echo "<td>" . $row['bloodgroup'] . "</td>";
                    echo "<td>" . $row['organs'] . "</td>";
                    echo "<td>" . $row['weight'] . "</td>";
                    echo "<td>" . $row['height'] . "</td>";
                }
            }

            ?>

        </table>
    </div>



    <?php include "../components/footer.php" ?>
</body>

</html>