<?php
/* Template Name: Kursus og Produkt Page */
get_header(); // Include the header.php file
?>

<!-- Kursus og Produkt Section -->
<section class="course-product-section">
    <div class="course-product-container">
        <!-- Content Block with Background Image -->
        <div class="course-product-content background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kurs_section.png');">
            <div class="content-text">
                <h2>Red Liv med Vores Kursus</h2>
                <p class="description">
                    Lad os sammen skræddersyr kurset til jeres behov. Vi sikrer, at du får den mest relevante og effektive træning.
                    Som en del af kurset modtager du også et komplet forblødningskit, der indeholder alt det nødvendige udstyr til at håndtere alvorlige blødninger.
                    Investér i "STOP BLØDNING" kurset i dag, og bliv en livredder i morgen.
                </p>
                <div class="price-box">Start pris 8.500 DKK eks. moms</div>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
          <!-- First Content Block -->
          <div class="course-product-content reverse">
            <div class="content-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/stop_1.png" alt="Hvordan underviser vi?">
            </div>
            <div class="content-text">
                <h2>Hvilke kompetencer får du fra kurset?</h2>
                <p>
                Når du har gennemført "STOP BLØDNING" kurset, vil du besidde en række essentielle færdigheder, herunder:
Kendskab til forskellige typer sår og de bedste metoder til at håndtere dem. Disse kompetencer er ikke kun nyttige i ekstreme nødsituationer, men også i dagligdags situationer, hvor hurtig førstehjælp kan være afgørende.
                </p>
            </div>
        </div>

        <!--  Second Content Block -->
        <div class="course-product-content">
            <div class="content-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/stop_5.png" alt="Hvorfor lære det?">
            </div>
            <div class="content-text">
                <h2>Hvorfor lære det?</h2>
                <p>
                    I nødsituationer kan hurtig og korrekt handling betyde forskellen mellem liv og død. "STOP BLØDNING"- kurset er designet til at udstyre dig med livsvigtige færdigheder til at håndtere alvorlige blødninger. Ulykker sker uventet, og ved at tage dette kursus, bliver du en værdifuld ressource, uanset hvor du er. Du vil være i stand til at yde førstehjælp, som kan stabilisere en person og give dem en bedre chance for at overleve, indtil professionel hjælp ankommer.
                </p>
                <a href="#" class="btn">Take Action</a>
            </div>
        </div>

        <!-- Third Content Block -->
        <div class="course-product-content reverse">
            <div class="content-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/stop_6.png" alt="Hvordan underviser vi?">
            </div>
            <div class="content-text">
                <h2>Hvordan underviser vi?</h2>
                <p>
                    Vores undervisningsmetode er praktisk og engagerende, hvilket sikrer, at deltagerne ikke blot forstår teorien bag teknikkerne, men også føler sig trygge ved at anvende dem i praksis. Kurset kombinerer interaktive lektioner med realistiske scenarier og hands-on træning. Erfaringerne bliver ledet af certificerede instruktører, som har baggrund i medicinsk nødbehandling. Dette skaber et dynamisk læringsmiljø, hvor du får direkte feedback og kan øve dine færdigheder til at STOPPE BLØDNING og redde liv.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); // Include the footer.php file
?>
