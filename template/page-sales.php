<?php 
    /*
        Template Name: Ventes
    */
    get_header();
?>

VENTES

<?php 

$sales = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order',
    'post_status' => 'publish',
    'parent' => $post -> ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-sale.php'
));

var_dump($sales);

foreach($sales as $sale): ?>
    <article>
        <p><?php echo($sale -> post_title);?></p>
    </article>
<?php endforeach; ?>

<?php
    //FOOTER 
    get_footer();
?>