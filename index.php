<?php
  // Lista de arquivos globais `global/styles/{nome-do-arquivo}.css`
  $styles = [
    "styles",
  ];

  // Lista de arquivos globais `global/scripts/{nome-do-arquivo}.js`
  $scripts = [
    "scripts",
  ];

  // Lista de módulos em `{nome-do-modulo}/`
  $modules = [
    "menu-de-navegacao",
    "jumbotron",
    "quem-somos",
    "projetos",
    "equipe",
    "contatos",
    "parceiros",
  ];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Avante | Estúdio de Tecnologia</title>
  <style>
    <?php
    // Inclui os CSSs Globais
    foreach ($styles as $key => $value) {
      $stylePath = 'global/styles/' . $value . '.css';
      if (file_exists($stylePath)) {
        include $stylePath;
      }
    }

    // Inclui os CSSs dos módulos
    foreach ($modules as $key => $value) {
      $stylePath = $value . '/styles.css';
      if (file_exists($stylePath)) {
        include $stylePath;
      }
    }
    ?>
  </style>
</head>
<body>
  <?php
  // Inclui os HTMLs dos módulos
  foreach ($modules as $key => $value) {
    $modulePath = $value . '/index.html';
    if (file_exists($modulePath)) {
      include $modulePath;
    }
  }
  ?>

  <script>
    <?php
    // Inclui os JSs Globais
    foreach ($scripts as $key => $value) {
      $scriptPath = 'global/scripts/' . $value . '.js';
      if (file_exists($scriptPath)) {
        include $scriptPath;
      }
    }

    // Inclui os JSs dos módulos
    foreach ($module as $key => $value) {
      $stylePath = $value . '/scripts.js';
      if (file_exists($scriptPath)) {
        include $scriptPath;
      }
    }
    ?>
  </script>
</body>
</html>