<footer class="container-fluid text-center mt-5">
    <div class="copyright">
        © Zwe Lwin
    </div>

    <?php
    $filename = basename($_SERVER['PHP_SELF']);
    if (file_exists($filename)) {
        echo "<div>Last modified: " . date("F d, Y H:i:s", filemtime($filename)) . "</div>";
    }
    ?>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
