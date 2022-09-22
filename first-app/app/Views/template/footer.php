<footer class="bg-dark text-center text-lg-start text-white">

    <div class="container p-4">


        <section class="mb-4">

            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #3b5998"
                href="https://www.facebook.com/madekevin.darmawan.5/" role="button"><i
                    class="fab fa-facebook-f"></i></a>


            <a target="_blank" class="btn btn-primary btn-floating m-1 disabled" style="background-color: #55acee"
                href="#!" role="button"><i class="fab fa-twitter"></i></a>


            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac"
                href="https://instagram.com/mkevin_1" role="button"><i class="fab fa-instagram"></i></a>


            <a target="_blank" class="btn btn-primary btn-floating m-1 disabled" style="background-color: #0082ca"
                href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #333333"
                href="https://github.com/kevinnvm" role="button"><i class="fab fa-github"></i></a>
        </section>


        <hr>


        <section class="">

            <div class="row">

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Homepage</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/home" class="text-white">Home</a>
                        </li>
                        <li>
                            <a href="/home#about" class="text-white">About</a>
                        </li>
                        <li>
                            <a href="/apps" class="text-white">Apps</a>
                        </li>
                        <li>
                            <?php helper('auth'); ?>
                            <?php if(logged_in()): ?>
                            <a href="/logout" class="text-white">Sign Out</a>
                            <?php else: ?>
                            <a href="/login" class="text-white">Sign In</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Apps</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/toko_online" class="text-white">Toko Online</a>
                        </li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Me</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="mailto:personal.kevindarmawan@gmail.com"
                                class="text-white">personal.kevindarmawan@gmail.com</a>
                        </li>
                        <li>
                            <a href="mailto:buzz.kevindarmawan@gmail.com"
                                class="text-white">buzz.kevindarmawan@gmail.com</a>
                        </li>
                        <li>
                            <a href="mailto:kevindinfo6@gmail.com" onclick="copy('kevindinfo6@gmail.com')"
                                class="text-white">
                                kevindinfo6@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Technology Used</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://mdbootstrap.com" class="text-white">MDBootstrap</a>
                        </li>
                        <li>
                            <a href="https://icons.getbootstrap.com" class="text-white">Bootstrap Icons</a>
                        </li>
                        <li>
                            <a href="https://jquery.com" class="text-white">JQuery</a>
                        </li>
                        <li>
                            <a href="https://codeigniter.com" class="text-white">CodeIgniter 4</a>
                        </li>
                        <li>
                            <a href="https://php.net" class="text-white">PHP</a>
                        </li>
                    </ul>
                </div>

            </div>

        </section>


    </div>



    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © <?= date("Y") ?> Copyright:
        <a class="text-white" href="https://github.com/kevinnvm/"><?= app_name ?></a>
    </div>


</footer>
<script>
function copy(str) {
    var copyText = str;
    navigator.clipboard.writeText(copyText);
}
</script>