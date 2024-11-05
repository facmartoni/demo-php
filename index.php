<?php

  require 'utils/general.php';

  # require 'router.php';
  require 'Database.php';

  $config = require 'config.php';
  $credentials = require 'credentials.local.php';

  $db = new DB($config, $credentials['username'], $credentials['password']);

  $posts = $db->query("SELECT * FROM posts WHERE id = ?", [1])->fetchAll();
  dd($posts);

