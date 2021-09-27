<li class="list-item-footer">
<div id="footer-title"></div>
    <footer id="footer">
        <div id="footer-items-wrapper-logo">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="safe">
            <div class="footer-container">
                <div id="footer-items-wrapper">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>

                <div id="footer-items-wrapper-2">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            </div>
            <div id="footer-items-wrapper">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
        </div>


    </footer>

    <div class="copyright"> <p> © Copyright 2019 Stranddetektor.dk | Alle rettigheder forbeholdes | Udviklet af Grumsen Development ApS </p></div>
</li>

<script>
    <?php 
    include('footer.js'); 
    
    if(is_page('stranded') || is_category()){
        include('strand.js');
    }

    ?>
</script>