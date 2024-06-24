<?php 
$is_home = false;
?>

<?php


    echo "<head><script>";
    echo "setTimeout(()=>{
    window.location.replace('../')
        }, 5000);";
    echo "</script></head>";

?>


<?php include "../components/head.php" ?>
<body>
    <?php include "../components/header.php" ?>
    
    <div class="min-h-[90vh] p-10 flex flex-col items-center justify-center">
        <img class="h-10" src="../assets/heat.png" alt="">
        <p class="mt-5 text-center text-2xl">Thank you for your pledge, you will save a life!</p>
    </div>

    <?php include "../components/footer.php" ?>
</body>
</html>