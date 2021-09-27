<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- FIRST SECTION  -->

        <li class="list-item">
            <div id="faq-hero">

                <h2>
                    Sådan opnår du det bedste resultat, når du tager et billede på stranden
                </h2>

                <p>
                    Genkendelsesfunktion i Strand Detektor fungerer mest sikkert, hvis du tager billeder som er helt entydige. Det vil sige billeder, hvor
                </p>

                <ul>
                    <li>der ikke indgår flere ting på samme billede
                    </li>
                    <li>afstanden til genstanden ikke er for stor
                    </li>
                    <li>genstanden ikke er delvis dækket af sand eller andet
                    </li>
                    <li>genstanden er fotograferet liggende på stranden</li>
                </ul>

                <p>
                Det betyder, at du sommetider bør flytte genstanden lidt ud på stranden i åbent miljø for at tage det mest entydige billede og gerne tæt på.                </p>
            </div>
        </li>

        <!-- MIDDLE SECTION  -->

        <li class="list-item" id="list-correct">

            <h2 id="faq-correct">Eksempler på rigtige og forkerte billeder</h2>

            <div id="faq-images">

                <div class="correct">
                    <h4 class="t-correct">RIGTIGT</h4>
                    <p class="correct-description"> Billedet er taget tæt på, uden andre forstyrrende genstande.</p>
                    <div class="correct-image"> <?php
                                                $image = get_field('correct');
                                                if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="" id="correct-image" />
                        <?php endif; ?>
                    </div>

                </div>

                <div class="correct">
                    <h4 class="t-correct">FORKERT</h4>
                    <p class="correct-description">Der ligger andre genstande på billedet.</p>
                    <div class="correct-image"> <?php
                                                $image = get_field('incorrect');
                                                if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="" id="correct-image" />
                        <?php endif; ?>
                    </div>


                </div>
            </div>
        </li>

        <li class="list-item" id="list-correct">
            <div id="faq-images">

                <div class="correct">
                    <h4 class="t-correct">RIGTIGT</h4>
                    <p class="correct-description">Billedet er taget tæt på.</p>
                    <div class="correct-image"> <?php
                                                $image = get_field('correct2');
                                                if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="" id="correct-image" />
                        <?php endif; ?>
                    </div>


                </div>

                <div class="correct">
                    <h4 class="t-correct">FORKERT</h4>
                    <p class="correct-description">Afstanden til genstanden er for lang.</p>
                    <div class="correct-image"> <?php
                                                $image = get_field('incorrect2');
                                                if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="" id="correct-image" />
                        <?php endif; ?>
                    </div>


                </div>
            </div>

        </li>

        <!-- LAST SECTION  -->

        <li class="list-item">
            <div id="faq">
                <h1>
                F.A.Q.                </h1>

                <p>
                Her kan du læse ofte stillede spørgsmål fra vores brugere og hvordan du opnår det bedste resultat, når du bruger appen til at finde oplysninger om de objekter du finder på stranden.                </p>

                <div id="q-and-a">
                    <h3 class="q" onclick="qna()">
                    Hvilke genstande kan Strand Detektor genkende?</h3>
                    <p class="a">
                    Strand Detektor kan detektere og genkende alle dyr, planter og andre genstande som du kan finde på hjemmesiden og i appen. Har vi glemt et vigtigt dyr eller en anden genstand som hører hjemme på stranden? Så giv os endelig besked!
                    </p>
                    <h3 class="qu" onclick="qnfa()">
                    Hvornår lærer Strand Detektor at genkende nye ting?</h3>
                    <p class="an">
                    Vi opdaterer Strand Detektor løbende med nye genstande. Men har du et foreslag, eller mener du at vi glemt noget vigtigt? Så send os gerne en e-mail på kontakt@stranddetektor.dk 🙂
                    </p>
                    <h3 class="que" onclick="qnaa()">
                    Hvordan virker appen?</h3>
                    <p class="ans">
                    Strand Detektor benytter sig af Machine Learning. Det betyder at hver gang vores brugere af appen, tager et billede af et objekt for at få det identificeret, så bliver billedet uploadet til vores server, som herefter bearbejdes og gør at fremtidige opslag af et objekt vil blive mere præcise. Vi vil derfor gerne sige tak til vores brugere, for at bruge vores app, og på samme tid være en del af det store fællesskab.
                    </p>
                    <h3 class="quest" onclick="qnsa()">
                    Hvordan opnår jeg det bedste resultat?</h3>
                    <p class="answ">
                    Du opnår det bedste resultat, ved at tage et billede af objektet uden at have en masse baggrundsstøj sammen med billedet. Hvis du tager et billede, og resultatet er forkert. Så prøv at flytte genstanden, så der kun er sand som baggrund. Hvis du gentagne gange får fejl, på det samme objekt. Så er du mere end velkommen til at give os besked på kontakt@stranddetektor.dk, så vi kan forbedre de omtalte objekter.
                    </p>
                    <h3 class="questi" onclick="qqna()">
                    Hvor kan jeg hente Strand Detektor?</h3>
                    <p class="answe">
                    Strand Detektor er tilgængelig for alle iOS enheder som har iOS 11.1 eller nyere installeret.
                    </p>
                    <h3 class="question" onclick="qwna()">
                    Hvad koster Strand Detektor?</h3>
                    <p class="answer">
                    Strand Detektor er som udgangspunkt gratis at bruge. Der er dog mulighed for at tilkøbe sig ekstra funktionalitet i form af In App Purchases i appen.
                    </p>

                </div>
            </div>
        </li>

        <script>
            <?php
            if (is_page('faq-en')) {
                include('faq-drp.js');
            }
            ?>
        </script>

<?php

    endwhile;
else :
    echo '<p>no content found</p>';

endif;

get_footer(); ?>