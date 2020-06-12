<?php

?>


<div id="landing">
    <img src="/img/mouffette/logomouffette.png" alt="Logo Team Mouffette">
    <?= $this->Form->create($contact) ?>
    <?= $this->Form->control('email')?>
    <?= $this->Form->button('Envoyer') ?>
    <?= $this->Form->end(); ?>

</div>

