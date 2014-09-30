<?php

require __DIR__.'/config_with_app.php';

$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

// Setup comment controller
$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});

// Route to start page
$app->router->add('', function() use ($app) {
  $app->theme->setTitle("Om mig");

  $content = $app->fileContent->get('me.md');
  $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

  $byline = $app->fileContent->get('byline.md');
  $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

  $app->views->add('me/page', [
    'content' => $content,
    'byline' => $byline,
  ]);

  $app->dispatcher->forward([
    'controller' => 'comment',
    'action'     => 'view',
  ]);
});

// Route to redovisning
$app->router->add('redovisning', function() use ($app) {
  $app->theme->setTitle("Redovisning");

  $content = $app->fileContent->get('redovisning.md');
  $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

  $byline = $app->fileContent->get('byline.md');
  $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

  $app->views->add('me/page', [
    'content' => $content,
    'byline' => $byline,
  ]);

  $app->dispatcher->forward([
    'controller' => 'comment',
    'action'     => 'view',
  ]);
});

// Add extra assets
$app->theme->addStylesheet('css/dice.css');

// Route to show welcome to dice
$app->router->add('dice', function() use ($app) {

  $app->views->add('dice/index');
  $app->theme->setTitle("Roll a dice");

});

// Route to roll dice and show results
$app->router->add('dice/roll', function() use ($app) {

  // Check how many rolls to do
  $roll = $app->request->getGet('roll', 1);
  $app->validate->check($roll, ['int', 'range' => [1, 100]])
      or die("Roll out of bounds");

  // Make roll and prepare reply
  $dice = new \Mos\Dice\CDice();
  $dice->roll($roll);

  $app->views->add('dice/index', [
    'roll'      => $dice->getNumOfRolls(),
    'results'   => $dice->getResults(),
    'total'     => $dice->getTotal(),
  ]);

  $app->theme->setTitle("Rolled a dice");

});

// Route to page source
$app->router->add('source', function() use ($app) {
  $app->theme->addStylesheet('css/source.css');
  $app->theme->setTitle("Källkod");

  $source = new \Mos\Source\CSource([
    'secure_dir' => '..',
    'base_dir' => '..',
    'add_ignore' => ['.htaccess'],
  ]);

  $app->views->add('me/source', [
    'content' => $source->View(),
  ]);
});

$app->router->handle();
$app->theme->render();