# AVANTE | Estúdio de Tecnologia

[http://localhost/avanteweb.github.io/](http://localhost/avanteweb.github.io/)


## Padrão de escrita geral

- Nome dos arquivos, classes e ids em letras minúsculas e sem acentuação, com traços `-` no lugar de espaços.
- Identação de 2 espaços;



## Página Index

Esse site só tem 1 página, que é a `index.php`.

O template dessa página tem 3 partes que incluem o conteúdo dos arquivos numa ordem predefinida.



## Código global

Código global é aquele que é base ou é reutilizado em várias partes do projeto. Em outras palavras, se o código for o mesmo para mais de um módulo, pode ser o caso de escreve-lo `global`.

Exemplos de estilos: arquivos de reset ou normalização, estilos base, padrões específicos do projeto, etc.

Exemplos de scripts: arquivos de bibliotecas como jquery, ou scripts de utilidade como modals, etc.

### Estrutura de arquivos globais

A pasta `global` localizada na raíz possúi a seguinte estrutura:

```
/global
  ├─ /styles
  ├─ /scripts
  └─ /img
```

### Lista de styles globais

Arquivos `/global/styles/{nome-do-arquivo}.css`

Para alterar a lista de arquivos incluídos confira em [index.php#L3](index.php#L3).

Exemplo:

```
$styles = [
  "lista",
  "de",
  "arquivos",
  "css",
];
```

### Lista de scripts globais

Arquivos `/global/scripts/{nome-do-arquivo}.js`

Para alterar a lista de arquivos incluídos confira em [index.php#L8](index.php#L8).

Exemplo:

```
$styles = [
  "lista",
  "de",
  "arquivos",
  "js",
];
```



## Módulos

Esse projeto está sendo desenvolvido em módulos utilizando as linguagens `html`, `css` e `js`.

### Estrutura de arquivos de um módulo

Exemplo de estrutura de arquivos dentro de um módulo:

```
/nome-do-modulo
  ├─ index.html
  ├─ styles.css
  ├─ scripts.js
  └─ /img
```

### Lista de módulos

Para alterar a lista de pastas incluídas confira em [index.php#L13](index.php#L13).

Exemplo:

```
$styles = [
  "lista",
  "de",
  "pastas",
];
```

### Estrutura HTML dos Módulos

O template do html em todos os módulos deve conter:

```html
<section class="module nome-do-modulo">
  <!-- aqui vai o conteúdo do módulo -->
<section>
```

É uma boa prática conter um elemento `<h1-h6>` dentro de cada `<section>`, mesmo que fique oculto na apresentação.

### Estrutura CSS dos Módulos

Vamos adotar uma convenção de independencia dos módulos no que se trata de estilização.

Todo o estilo dos módulos devem conter o seletor `.module.nome-do-modulo` no incio de todas as propriedades.

Exemplo:

```css
.module.nome-do-modulo a {
  color: blue;
}

.module.nome-do-modulo .titulo {
  font-size: 9em;
}
```
