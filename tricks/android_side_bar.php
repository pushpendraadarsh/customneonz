<div class="container-mobile-ui">
    <button id="burger" class="open-main-nav">
        <span class="burger"></span>
        <span class="burger-text">Menu</span>
    </button>
    <nav class="main-nav" id="main-nav">
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="Design_your_own_sign.php">Customize your Neon Light</a>
            </li>
            <li>
                <a href="upload-your-own-sign.php">Upload your own design</a>
            </li>
            <li>
                <a href="best-seller.php">
                    Our Bestsellers
                </a>
            </li>
            <li>
                <a href="hire-neon-designer.php">Hire a Neon designer</a>
            </li>
        </ul>
    </nav>
</div>
<script>
let burger = document.getElementById('burger'),
    nav = document.getElementById('main-nav'),
    slowmo = document.getElementById('slowmo');

burger.addEventListener('click', function(e) {
    this.classList.toggle('is-open');
    nav.classList.toggle('is-open');
});

slowmo.addEventListener('click', function(e) {
    this.classList.toggle('is-slowmo');
});

/* Onload demo - dirty timeout */
let clickEvent = new Event('click');

window.addEventListener('load', function(e) {
    slowmo.dispatchEvent(clickEvent);
    burger.dispatchEvent(clickEvent);

    setTimeout(function() {
        burger.dispatchEvent(clickEvent);

        setTimeout(function() {
            slowmo.dispatchEvent(clickEvent);
        }, 3500);
    }, 5500);
});
</script>