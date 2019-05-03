<?php if($messages): ?>
    <div id="messages">
        <div class="section clearfix">
            <?php print $messages; ?>
        </div>
    </div>
<?php endif; ?>
<?php print render($page['content']); ?>
