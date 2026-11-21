<section class="ending">
<footer class="footer" id="contact">
    <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/profile.php?id=100057061166512">
            <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="https://www.youtube.com/@nenadjerinic2497/featured">
            <ion-icon name="logo-youtube"></ion-icon>
        </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/tkd_sloga_doboj/">
            <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>

    <p>&copy;2023 Sloga | All Rights Reserved</p>

    <?php 
    $base_url = get_template_directory_uri(  );
    ?>

</footer>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    const baseUrl = "<?php echo $base_url; ?>";
</script>
<?php wp_footer(  );?>

</body>
</html>