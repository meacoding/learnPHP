<?php 
include("includes/data.php");
include("includes/functions.php");
$pageTitle = "Personal Media Library";
$section = null;

include("includes/header.php"); 
?>
    
    <div class="section catalog random">

        <div class="wrapper">

            <h2>May we suggest something?</h2>

            <ul class="items">

            <?php 
            $random = array_rand($catalog, 4);
            foreach ($random as $id) {
                echo get_item_html($id, $catalog[$id]);
            }
            ?>
                <!-- <li><a href="details.php?id=201"><img src="img/media/forest_gump.jpg" alt="Forrest Gump">
                        <p>View Details</p>
                    </a></li>
                <li><a href="details.php?id=204"><img src="img/media/princess_bride.jpg" alt="The Princess Bride">
                        <p>View Details</p>
                    </a></li>
                <li><a href="details.php?id=302"><img src="img/media/elvis_presley.jpg" alt="Elvis Forever">
                        <p>View Details</p>
                    </a></li>
                <li><a href="details.php?id=303"><img src="img/media/garth_brooks.jpg" alt="No Fences">
                        <p>View Details</p>
                    </a></li> -->
            </ul>

        </div>

    </div>

</div> <!--end content-->

<?php include("includes/footer.php"); ?>