<a href="<?php the_permalink();?>" class="hrArticle">
<?php
    $imgArr = array('class' =>'hrArticle__img');
    if(get_the_post_thumbnail()){
        the_post_thumbnail('full', $imgArr);
    }else{
        ?>
        <img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="hrArticle__img">
        <?php
    }
?>
    <div class="hrArticle__info">
        <?php $category = get_the_terms('','mainthemes');
            if(!$category){
                $category = get_the_category();
            }
        ?>
        <span class="hrArticle__heading" onclick="event.preventDefault();window.location='<?php
                    echo get_term_link($category[0]->term_id);
            ?>'">
            <?php
                echo $category[0]->name;
            ?>
        </span>
        <h3 class="hrArticle__header">
            <?php
                $text = get_the_title();
                echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
            ?>
        </h3>
        <span class="hrArticle__text">
            <?php
                $text = get_the_excerpt();
                echo kama_excerpt(array('maxchar'=>150, 'text'=>$text));
            ?>
        </span>
    </div>
</a>