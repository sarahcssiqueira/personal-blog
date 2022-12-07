<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
?>
<?php get_header();?>

<main class="container">
        <section class="inner-section padding-x3">
        
            <div class="section-flex-column-center">
                <img src="../inc/images/Post Default.png" class=""></img>

                <div class="">
                    <ul role="list" class="section-flex-row margin-tb-x1">
                        <li class="bg-highlight-500 fc-light tags">category</li>
                        <li class="bg-highlight-500 fc-light tags">category</li>
                        <li class="bg-highlight-500 fc-light tags">category</li>
                    </ul>
                </div>

            <h2 class="fs-medium fw-bold fc-dark margin-tb-x1">
                Post Title
            </h2>
            <div class="section-flex-row-sb">
                <p class="fs-xxx-small fc-medium fw-medium">
                    Date
                </p>
                <p class="fs-xxx-small fc-medium fw-medium">
                    Category
                </p>
            </div>
            </div>

            <p class="fs-x-small fw-regular fc-medium fa-justify margin-tb-x1">
                Praesent elementum, diam molestie ultrices varius, ex arcu auctor lectus, quis auctor eros odio sit amet ligula. Aliquam dictum consequat vestibulum. Phasellus sed est mauris. Pellentesque posuere fringilla gravida. Vivamus dictum, ligula eu volutpat consequat, ligula mi bibendum nibh, sit amet egestas urna diam vel libero. Aliquam erat volutpat. Proin rhoncus iaculis mauris. Phasellus malesuada nisl vitae eros aliquet, eu mattis libero feugiat.
            </p>

        
            <!-- Comments -->

            </div>
           
        </section>

        <section class="inner-section padding-x3">
            <h2 class="fc-highlight-500 fs-medium fw-bold">
                Posts You May Like
            </h2>
            <div class="section-grid-x3">
                <div class="grid-item padding-x1">
                    <img src="../inc/images/Post Default.png" class="featured-section-image"></img>
                    <h3 class="fs-small fw-semi-bold fc-highlight-500 margin-tb-x1">
                        Lorem Ipsum
                    </h3>
                    <p class="fs-x-small fw-regular fc-medium fa-justify margin-tb-x1">
                        Lorem Ipsum
                    </p>
                </div>
                <div class="grid-item padding-x1">
                    <img src="../inc/images/Post Default.png" class="featured-section-image"></img>
                    <h3 class="fs-small fw-semi-bold fc-highlight-500 margin-tb-x1">
                        Lorem Ipsum
                    </h3>
                    <p class="fs-x-small fw-regular fc-medium fa-justify margin-tb-x1">
                        Lorem Ipsum
                    </p>
                </div>
                <div class="grid-item padding-x1">
                    <img src="../inc/images/Post Default.png" class="featured-section-image"></img>
                    <h3 class="fs-small fw-semi-bold fc-highlight-500 margin-tb-x1">
                        Lorem Ipsum
                    </h3>
                    <p class="fs-x-small fw-regular fc-medium fa-justify margin-tb-x1">
                        Lorem Ipsum
                    </p>
                </div>
                
            </div>
        </section>

    </main>

<?php get_footer(); ?>