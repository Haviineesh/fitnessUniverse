<?php if(count($errors) > 0) : ?>

    <div>
        <?php foreach($errors as $error) : ?>

            <p><?php echo $error ?></P>

        <?php endforeach ?>

    </div> 

<?php endif ?>