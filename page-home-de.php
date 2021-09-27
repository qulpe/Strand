<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>



        <li id="home-hero" class="list-item">
            <h1>
            Gå på opdagelse på stranden i Danmark
            </h1>
            <p>
            Havet er en gratis leverandør af både naturoplevelser og ingredienser, der gør godt for krop og sjæl. Stranden kan spises og meget af det du finder på stranden kan bruges til alle mulige formål. Stranden er et paradis for tingfindere og hver eneste ting du finder har tilknyttet sin egen finurlige historie. Men hvad er det egentligt som ligger der på stranden. Bliv klogere med Strand Detektor i hånden og oplevelsen af naturen bliver meget større.
            </p>
        </li>
     
        <li class="list-item">
            <div id="home-mid">
                <div id="home-mid-l">
                    <div>
                    <h2>
                    Et digitalt strand-leksikon
                    </h2>
                    <p>
                    Tag et billede af en musling, et stykke tang eller andet på stranden og få information om genstanden direkte på din telefon.                    </p>
                    <p>
                    Når du benytter dig af Strand Detektor, så bidrager du til fællesskabet. Strand Detektor benytter Machine Learning, til at genkende de objekter som du fotograferer. Det betyder at jo flere som bruger appen, jo bedre bliver appen til at genkende ting. Så gå på opdagelse i naturen og vær med til at hjælpe andre, med at få en større viden om de danske strande.
            </p>
                    </div>
                    <?php
                    $image = get_field('download');
                    if (!empty($image)) : ?>
                    <a href="https://apps.apple.com/dk/app/strand-detektor-din-vejleder/id1454271046?ls=1"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="download-button" /></a>
                    <?php endif; ?>
                   
                </div>
                
                <?php
                $image = get_field('image-phone');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="phone" />
                <?php endif; ?>
         
            </div>
        </li>

        <li class="list-item">
        <h2>    
        Strand Detektor er din egen personlige naturvejleder        </h2>
        <p>
        Med Strand Detektor lærer du om stranden uden at det bliver for nørdet og på en hurtig og enkel måde. Om du går alene på stranden eller sammen med børn og familie, så kan du med detektoren i hånden, udvide din viden om den storslåede natur vi har langs Danmarks 7.000 km lange kystlinje. Ved at bruge kameraet i din iPhone forsynes du med information om hvad man kan finde på stranden. Når du bruger Strand Detektor finder du hurtigt ud af, at der er andet og mere end sand og vand på stranden.            </p>
         
        </li>


<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>