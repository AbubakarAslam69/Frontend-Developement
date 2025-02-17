<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <a href="#" class="footerLogo"><img src="images/footerlogo.png" class="img-fluid" alt="img"></a>
            </div>
            <div class="col-md-2">
                <h3>QUICK LINKS</h3>
                <ul class="quicklist">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <a href="#">
                    <div class="contactIn">
                        <div class="phone">
                            <i class="fal fa-phone-alt"></i>
                            <div class="phone-info">
                                <h6>Phone :</h6>
                                <p>+(123) 456 7890</p>
                            </div>
                        </div>
                        <div class="phone">
                            <i class="fal fa-map-marker-alt"></i>
                            <div class="phone-info">
                                <h6>Location :</h6>
                                <p>100 Dummy Street 45 Building United State</p>
                            </div>
                        </div>
                        <div class="phone">
                            <i class="fal fa-envelope"></i>
                            <div class="phone-info">
                                <h6>EMail :</h6>
                                <p>info@yourmail.com</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <h3>Newsletter</h3>
                <div class="calFoter">
                    <p>Subscribe our newsletter to get latest updates</p>
                    <input type="email" placeholder="Email Address">
                    <button>Subscribe Now</button>
                </div>
            </div>
        </div>
        <div class="copyRight">
            <div class="container">
                <div class="copwrap">
                    <p>Copyright &copy; <span id="currentyear"><?= date("Y") ?></span>. All Right Reserved </p>
                    <ul class="social-link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    </div>
</footer>
<!-- !FOOTER -->


<!-- SEARCH BOX -->
<div id="search">
    <button class="close" type="button"><i class="fas fa-times"></i></button>
    <form>
        <input placeholder="SEARCH" type="search" value="">
        <div class="srch-btn">
            <a href="#" class="themeBtn">Search</a>
        </div>
    </form>
</div>
<!-- !SEARCH BOX -->


<!-- ALL JS LIBRARIES -->
<script src="js/all.min.js"></script>

<!-- CUSTOM JS -->
<script src="js/custom.min.js"></script>


</body>

</html>