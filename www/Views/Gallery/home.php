<main class="gallery">
    <h2>Gallerie avec carrousel d'images</h2>
    <section class="gallery--content">
        <div class="carousel">
            <button class="carousel--control prev">&lt;</button>
            <div class="carousel--inner">
                <?php foreach ($images as $index => $image): ?>
                    <div class="carousel--item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <h3 class="gallery--item__title"><?php echo htmlspecialchars($image->getTitle()); ?></h3>
                        <?php
                        $link = $image->getLink();
                        $relativeLink = str_replace('/var/www/html/Public', '', $link);
                        ?>
                        <img class="gallery--item__picture" src="<?php echo htmlspecialchars($relativeLink); ?>" alt="<?php echo htmlspecialchars($image->getDescription()); ?>">
                        <p class="gallery--item__description"><?php echo htmlspecialchars($image->getDescription()); ?></p>
                        <div class="separator"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel--control next">&gt;</button>
        </div>
        <div class="gallery--classic">
            <?php foreach ($images as $image): ?>
                <div class="gallery--classic__item">
                    <h3 class="gallery--classic__item__title"><?php echo htmlspecialchars($image->getTitle()); ?></h3>
                    <?php
                    $link = $image->getLink();
                    $relativeLink = str_replace('/var/www/html/Public', '', $link);
                    ?>
                    <img class="gallery--classic__item__picture" src="<?php echo htmlspecialchars($relativeLink); ?>" alt="<?php echo htmlspecialchars($image->getDescription()); ?>">
                    <p class="gallery--classic__item__description"><?php echo htmlspecialchars($image->getDescription()); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImage">
            <div id="caption"></div>
        </div>

    </section>
</main>
<script src="/js/gallery.js"></script>