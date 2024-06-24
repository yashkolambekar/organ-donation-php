<?php

$prefix = "";

if($is_home){
    $prefix = ".";
}else{
    $prefix = "..";
}

?>

<div class="px-10 py-5 bg-[#B62B24] flex justify-between items-center">
    <a href="<?php echo $prefix ?>/" class="font-semibold text-2xl text-white">Organ Donation Drive</a>
    <div>
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" href="<?php echo $prefix ?>/new-receiver">Register Receiver</a>
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" href="<?php echo $prefix ?>/view-pledges">View Pledges</a>
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" href="<?php echo $prefix ?>/view-receivers">View Receivers</a>
    </div>
</div>