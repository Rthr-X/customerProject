<?php

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");

    ?>
    <!doctype html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <script language="javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <?= $debugbarRenderer->renderHead(); ?>
        </head>
        <body>

            Content


            <?= $debugbarRenderer->render(); ?>
        </body>
    </html>