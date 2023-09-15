#!/bin/bash

# Pequeno script usado para agilizar a criação de novos exercícios.
# Ele é interpretado usando bash, uma linguagem usada nas CLI linux.

mkdir "$1"
touch "$1/exercicio.php" "$1/solucao.php"
code "$1/exercicio.php" "$1/solucao.php"
