<?php
// Routes

$app->get('/[{amount}]', App\Action\HowDoYouWrite::class);