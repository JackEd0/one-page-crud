<?php
/**
 * Created by PhpStorm.
 * User: ploggmedia
 * Date: 2017-01-26
 * Time: 8:45 AM
 */
$navbar = ['home' => '', 'chapters' => '', 'fields' => '', 'grades' => '', 'card_types' => '',
        'subjects' => '', 'login' => '', 'register' => '', 'admin' => '', 'profil' => '',
        'comments' => '', 'cards' => '', 'users' => '', 'exercises' => ''];
if (isset($subbar)) {
    $navbar[$subbar] = 'active';
}
?>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">NEMAXE.</a>
        </div>
    </div>
</div>
