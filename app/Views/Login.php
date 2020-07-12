<?php
include "header.php";
?>
<link rel="stylesheet" type="text/css" href="sass/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.js"></script>
<script src="angular/controllers/header.controller.js"></script>
<body class="fundo-cor">
<div ng-app="myProject" ng-controller="header_controller">

    <div class="container-fluid">
        <div class="row bloco-principal">
            <div class="conteudo">
                <div class="login-tradicional">
                    Tradicional
                </div>
                <div class="login-redes">
                    Redes
                </div>
            </div>
        </div>
    </div>
</div>
</body>
