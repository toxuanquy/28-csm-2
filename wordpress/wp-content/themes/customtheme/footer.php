<footer class="container" id="footer">
    <div class="row">
        <div class="col-sm-4">
            <h4>Liên Hệ</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. .</p>
        </div>
        <div class="col-sm-4">
            <h4>Blog</h4>
            <ul>
                <a href=""><li>Liên Lạc</li></a>
                <a href=""><li>thông Tin</li></a>
                <a href=""><li>Giới Thiệu</li></a>
            </ul>
        </div>
        <div class="col-sm-4">
            <h4>Danh sách</h4>
            <ul>
                <a href=""><li>Danh sách SP</li></a>
                <a href=""><li>Thông tin</li></a>
                <a href=""><li>Giỡi thiệu</li></a>
            </ul>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        © <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('Tecnology cational', 'quyto'); ?>
    </div>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>
<script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>
</body>

</html>