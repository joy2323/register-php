<?php
if (count($errors) > 0 ) : ?>

<div class="errors">
    <? foreach ($errors as $error) : ?>
        <p>
            <? echo $error ?>
        </p>
    <? endforeach ?>
</div>



<? endif ?>