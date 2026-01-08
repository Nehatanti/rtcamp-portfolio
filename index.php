<?php get_header(); ?>

<main class="container">

    <h1>Welcome to My Portfolio</h1>
    <p>Hello! I am Neha, learning WordPress and PHP. Here are my projects:</p>

    <h2>My Projects</h2>

    <?php
    // This gets all projects from the custom post type 'project'
    $projects = new WP_Query(array(
        'post_type' => 'project'
    ));

    if ($projects->have_posts()) {
        while ($projects->have_posts()) {
            $projects->the_post(); // prepares the content
    ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
    <?php
        }
        wp_reset_postdata(); // resets query
    } else {
        echo '<p>No projects found yet.</p>';
    }
    ?>

</main>

<?php get_footer(); ?>