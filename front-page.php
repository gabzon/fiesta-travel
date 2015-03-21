<div id="frontpage">
    <section id="masthead" class="ui basic inverted orange segment fullheight">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>
    </section>

    <section id="promotion" class="ui basic inverted purple segment fullheight">

    </section>

    <section id="services" class="ui basic inverted blue segment fullheight">

    </section>

    <section id="form" class="ui basic inverted red segment fullheight">

    </section>

    <section id="about" class="ui basic inverted green segment fullheight">

    </section>
</div>
