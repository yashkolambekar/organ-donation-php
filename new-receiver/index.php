<?php
$is_home = false;
?>

<?php


if(isset($_POST["fullname"])){
    include "../sql/db.php";
    echo "fullname exists";

    // $organs = "";
    // foreach($_POST["organs"] as $organ){
    //     $organs += $organ;
    // }

    $organs = implode(", ",$_POST["organ"]);

    $stmt = $db->prepare("INSERT INTO `receivers` (full_name, age, gender, medical_id, bloodgroup, organs, weight, height, hospital) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissssiis", $_POST["fullname"], $_POST["age"], $_POST["gender"], $_POST["medical_id"], $_POST["bloodgroup"], $organs, $_POST["weight"], $_POST["height"], $_POST["hospital"]);
    $result = $stmt->execute();

    if($result){
        echo "<head><script>";
        echo "window.location.replace('../thankyou')";
        echo "</script></head>";
    }
    

}

?>

<?php include "../components/head.php" ?>

<body>
    <?php include "../components/header.php" ?>


    <div class="p-10 bg-[#FFE3D7] min-h-[600px] flex flex-col items-center">
        <p class="text-2xl">Register a Receiver</p>

        <div class="bg-[#871c17] p-10 rounded-xl mt-4 text-white max-w-[100%]">
            <?php include "../components/form.php" ?>
        </div>

    </div>


    <?php include "../components/footer.php" ?>
</body>

</html>