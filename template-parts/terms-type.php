<?php 
    $terms = get_terms( [
        'taxonomy' => 'type',
        'hide_empty' => false,
    ] );    

    if( !is_null( $terms )) :
?>

    <ul class="tabs-nav">              
            <li>
                <?php $class = ( !is_tax() ) ? 'active' : '';?>
                <a href="<?=get_home_url(null, 'portfolio')?>" class="<?=$class?>">Все</a>
            </li>  
        <?php foreach( $terms as $term ): ?>
            <li>
                <?php $class = ( is_tax( 'type', $term->name ) ) ? 'active' : ''; ?>
                <a href="<?=get_home_url(null, 'type/'.$term->slug)?>" class="<?=$class?>"><?=$term->name?></a>
            </li>  
        <?php endforeach; ?>
    </ul>
    <!-- /.tabs-nav -->

<?php endif; ?>
