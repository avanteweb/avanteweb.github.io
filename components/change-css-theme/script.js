(function () {
  'use strict';

  document.addEventListener("DOMContentLoaded", function () {

    document.getElementById('muda1').onclick = function (e) {

      document.getElementById("body").className = "estilo1";
    };


    document.getElementById('muda2').onclick = function (e) {

      document.getElementById("body").className = "estilo2";
    };


    document.getElementById('muda3').onclick = function (e) {

      document.getElementById("body").className = "estilo3";
    };

  });
}());