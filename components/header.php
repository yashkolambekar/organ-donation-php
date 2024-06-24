<?php

$prefix = "";

if($is_home){
    $prefix = ".";
}else{
    $prefix = "..";
}

?>

<div class="px-10 py-5 bg-[#B62B24] flex flex-col sm:flex-row justify-between items-center">
    <a href="<?php echo $prefix ?>/" class="font-semibold text-2xl text-white">Organ Donation Drive</a>
    <div class="mt-4 md:mt-0">
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" style="" href="<?php echo $prefix ?>/new-receiver">
            <button>Register Receiver</button>
        </a>
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" style="" href="<?php echo $prefix ?>/view-pledges">
        <button>View Pledges</button>    
        </a>
        <a class="text-[0.7em] text-white bg-[#6b1914] p-2 rounded" style="" href="<?php echo $prefix ?>/view-receivers">
            <button>View Receivers</button>

        </a>
    </div>
</div>