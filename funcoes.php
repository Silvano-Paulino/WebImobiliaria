<?php
        function thumb($arq) {
            $caminho = "upload/$arq";
            if(is_null($arq) || !file_exists($caminho)) {
                return "upload/indisponivel.png";
            }else {
                return $caminho;
            }
        }
    ?>