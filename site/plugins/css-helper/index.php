<?php

 Kirby::plugin('my/css', [
  'components' => [
    'css' => function (Kirby $kirby, string $url, $options = null): string {
      // create fingerprint for cache busting
      $fingerprint = md5_file($url);
      return $url . '?' . $fingerprint;
    }
  ]
]);