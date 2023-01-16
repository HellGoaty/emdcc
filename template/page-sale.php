<?php 
    /*
        Template Name: Vente
    */
    //Header
    get_header();

    $image = get_field(selector: 'image');
?>

<h1><?php echo(get_the_title());?> </h1>
<h2> <?php the_field(selector: 'price');?> €</h2>
<?php if(get_field(selector: 'adress')):?>
    <h2> <?php the_field(selector: 'adress');?> €</h2>
<?php else:?> 
    <p>Aucune adresse renseignée</p>
<?php endif; ?>

<article>
    <img 
        src="<?php echo($image['sizes']['medium_large'])?>"
        height="<?php echo($image['width']['medium_large_width'])?> "
        alt="<?php echo($image['alt'])?>"
    >
</article>

VENTE


<?php
    //FOOTER 
    get_footer();
?>

