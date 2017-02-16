<?php 
	include 'includes/header.php';
?>
    <section id="worldmap"> <img src="images/worldmap.png">
        <div class="wrapper">
            <button type="button" onclick="playSound();" id="knap">{{ message }}</button>
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
    <article class="modal"> <img src="images/<?php include 'includes/array.php';
?>" alt="Pictures of destination" </img>
        <h1 id="result">You are going to 
<?php
include 'includes/array.php';
?>
</h1> </article>
    <?php 	
	include 'includes/footer.php';
?>