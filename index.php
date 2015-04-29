<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Avante | Estúdio de Tecnologia</title>
  <style>
    <?php
    // Lista de arquivos globais `global/styles/{nome-do-arquivo}.css`
    $styles = [
      "styles",
    ];
    foreach ($styles as $key => $value) {
      $stylePath = 'global/styles/' . $value . '.css';
      if (file_exists($stylePath)) {
        include $stylePath;
      }
    }
    ?>
  </style>
</head>
<body>
  <?php
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

  foreach ($modules as $key => $value) {
    $modulePath = $value . '/index.html';
    if (file_exists($modulePath)) {
      include $modulePath;
    }
  }
  ?>

  <script>
    <?php
    // Lista de arquivos globais `global/scripts/{nome-do-arquivo}.js`
    $scripts = [
      "scripts",
    ];

    foreach ($scripts as $key => $value) {
      $scriptPath = 'global/scripts/' . $value . '.js';
      if (file_exists($scriptPath)) {
        include $scriptPath;
      }
    }
    ?>
  </script>
</body>
</html>