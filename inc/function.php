<?php
/**
 * Fonction qui sert à afficher plus simplement une variable de type array
 * @param array $tableau
 * @return void
 */
function debug($tableau)
{
    echo '<pre style="height:300px;overflow: scroll; font-size: .8em;padding: 10px;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

/**
 * la fonction xss permet de contrer les failles XSS
 *
 * @param mixed $value
 * @return void
 */
function xss($value)
{
    return trim(strip_tags($value));
}

/**
 * Permet d'afficher les erreurs
 *
 * @param array $errors
 * @param mixed $key
 * @return void
 */
function viewError($errors, $key)
{
    if (!empty($errors[$key])) {
        echo $errors[$key];
    }
}

function calculAge($date)
{
    $date = new DateTime($date);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}