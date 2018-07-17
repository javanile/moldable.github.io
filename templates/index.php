<?php
/**
 *
 */

include __DIR__.'/header.php';
include __DIR__.'/nav.php';
?>

<main>
    <div class="container">
        <div class="row row-reverse">
            <div class="col col-lg-9 mt0 pt0">
                <section class="mt0 pt0">
                    <h1 class="h2">Installation</h1>

                    <?php $this->content() ?>

                    <p>There are a few different ways you can include mustard within your project. You can simply download the zip file below, use NPM to install it into your own project, or include it via a CDN.</p>
                    <p><strong>Note:</strong> Mustard does not include a CSS reset such as normalize.</p>
                    <p>
                    <a class="button button-primary" href="https://github.com/kylelogue/mustard-ui/archive/master.zip">Download Mustard</a>
                    </p>
                    <strong>Install using NPM:</strong>
                    <pre class="language-bash">
                    <code class="language-bash">
                    npm install mustard-ui
                    </code>
                    </pre>
                    <strong>Include via a CDN:</strong>
                    <pre class="language-html">
                    <code class="language-html">
                    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css&quot;&gt;
                    </code>
                    </pre>
                </section>
            </div>
            <div class="col col-lg-3 display-lg-up">
                <?php include __DIR__.'/sidebar.php' ?>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
