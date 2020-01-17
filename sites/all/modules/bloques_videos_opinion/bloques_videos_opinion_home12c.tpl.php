<div class="bs12-4GaleriaHorizontal">
    <?php if ($title): ?>
    <div class="ceh-Sm">
        <div class="ceh-Sm_Divisor background-metropoli metropoli"></div>
        <h3 class="ceh-Sm_Titulo">
        <?php if ($url): ?>
            <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
        <?php else: ?>
            <?php echo $title; ?>
        <?php endif;?>
        </h3>
    </div>
    <?php endif;?>
    <?php foreach ($nodes as $key => $node): ?>
    <article class="ce3-Tipo7b">
        <div class="ce3-Tipo7b_ContenedorImagen">
            <a href="<?php echo drupal_get_path_alias('node/'.$node['nid']); ?>">
                <img src="<?php echo $node['mediumThumbnail']; ?>" alt="<?php echo htmlentities($node['summary']); ?>" class="ce3-Tipo7b_Imagen">
            </a>
            <i class="far fa-play-circle ce3-Tipo7b_Play"></i>
        </div>
        <h3 class="ce3-Tipo7b_Titulo">
            <a href="<?php echo drupal_get_path_alias('node/'.$node['nid']); ?>">
                <?php echo $node['title']; ?>
            </a>
        </h3>
    </article>
    <?php endforeach; ?>
</div>