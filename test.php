<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new Illuminate\Container\Container();
$app->instance('app', $app);
$app->bind(App\Fuga\TestA::class, function() {
    return new \App\Fuga\TestA();
});
$app->bind(App\Fuga\TestB::class, function() {
    return new \App\Fuga\TestB();
});
$app->bind(App\Hoge\TestC::class, function() {
    global $app;
    $testB = $app->make(App\Fuga\TestB::class);
    return new \App\Hoge\TestC($testB);
});

$app->make(App\Fuga\TestA::class)->echoMyName();
$app->make(App\Fuga\TestB::class)->echoMyName();
$app->make(App\Hoge\TestC::class)->echoMyName();
