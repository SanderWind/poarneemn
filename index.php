<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>POAR NEEM'N!</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>

        <header class="site-header">
            <h1 class="site-title">POAR NEEM'N!</h1>
        </header>

        <section class="site-content">

            <?php if (isset($_POST) && !empty($_POST['problem'])) : ?>
                <aside class="site-answer">
                    <p>The answer for your problem "<?php echo htmlspecialchars($_POST['problem']); ?>" is:</p>
                    <p><span class="answer">POAR NEEM'N!</span></p>
                </aside>
            <?php endif; ?>

            <form action="/" method="POST" class="site-form">
                <div>
                    <input type="text" name="problem" id="problem" placeholder="What's your problem?">
                </div>
                <div>
                    <input type="submit" value="Give me your answer!">
                </div>
            </form>

        </section>

        <footer class="site-footer">
            <div class="footer-content">
                <p>Made by Dr. Dreher &amp; Arany &copy; 2016</p>
            </div>
        </footer>
    </body>
</html>
