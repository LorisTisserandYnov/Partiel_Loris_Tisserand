<?php

function redirect(string $location)
{
  header('Location: ' . $location);
  exit;
}

//ce code marche (j'espére)