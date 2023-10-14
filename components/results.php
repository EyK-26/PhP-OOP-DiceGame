<div class="results">
        <?php if ($results) : ?>
            <?php foreach ($results as $key => $number) : ?>
                <p><?php echo $key + 1; ?>: <?php echo $number; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
