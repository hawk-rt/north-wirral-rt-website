<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">North Wirral Round Table</h4>
                <p class="lead mb-0">
                    Great Britain & Ireland:
                    <br />
                    North Wirral 311
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/northwirralroundtable"><i class="bi bi-facebook"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/NorthWirralRT"><i class="bi bi-twitter"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Contact Us</h4>
                <p class="lead mb-0">
                    We'd love to hear from you.
                    <br />
                    Visit our <a href="{{ $page->links->contact }}">contact page</a> to reach us.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; {{ date('Y') }} {{ $page->title }}</small></div>
</div>