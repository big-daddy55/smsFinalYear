<?php
view('/partials/head.php', [
    'title' => 'Page Not Found'
]);
?>
<main class="error-main">
    <h2>You Lost Buddy?</h2>
    <p>Page not Found</p>
    <a href="/">go back home</a>
</main>
<?php
view('/partials/footer.php');
?>