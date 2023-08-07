<?php

const ESCOLA = "Senac";
$curso = "Téc. em Informática";
$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

$verificaIdade = function ($idade) {
    return $idade >= 18 ? "Maior de idade" : "Menor de idade";
};

