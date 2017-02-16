<?php 
	include 'includes/header.php';
    include 'includes/array.php';
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
    <article class="modal"> <img id="resultimg" src="images/<?php echo $a[$random_key]
?>.jpg" alt="Pictures of destination" </img>
        <h1 id="result">You are going to 
<?php
echo $a[$random_key]."!";
?>
</h1> </article>
    <?php 	
	include 'includes/footer.php';
?>