<?php 
	include 'includes/header.php';
?>
    <section id="worldmap"> <img src="images/worldmap.png">
        <div class="wrapper">
            <button type="button" id="knap">{{ message }}</button>
        </div>
    </section>
    <script>
        var wrapper = new Vue({
            el: '.wrapper'
            , data: {
                message: 'Take Me Anywhere'
            }
        })
    </script>
    <?php 
	
	
	include 'includes/footer.php';
?>