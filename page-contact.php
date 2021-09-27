<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <li class="list-item" id="page-kontakt">

            <div id="contact-info">

                <h1>Kontaktinformationer</h1>
                <p> Nørregade 65A, 6700 Esbjerg</p>
                <p> +45 93 93 95 95</p>
                <p> kontakt@strandetektor.dk</p>

            </div>

            <div id="contact-form">

                <div id="contact-title-mobile">
                    <h1>Skriv til os</h1>
                    <p> Har du spørgsmål, foreslag eller vil du blot i kontakt med os – Så hold dig endelig ikke tilbage!</p>
                </div>

                    <?php dynamic_sidebar('contact-form') ?>

                <div id="contact-title">
                    <h1>Skriv til os</h1>
                    <p> Har du spørgsmål, foreslag eller vil du blot i kontakt med os – Så hold dig endelig ikke tilbage!</p>
                </div>

            </div>

        </li>

    <?php 
    
    if(is_page('contact')){
        echo '<style>
        @media (max-width: 420px){
             p{
                margin: 5px 0 5px 0 !important;
             }
            
        }        
        </style>';
    }

    ?>

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>