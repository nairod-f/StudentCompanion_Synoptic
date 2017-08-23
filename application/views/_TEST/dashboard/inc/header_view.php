<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <title>MyApp</title>

            <link type="text/css" rel="stylesheet" href="<?=base_url('public/css/bootstrap.min.css'); ?>">
            <link type="text/css" rel="stylesheet" href="<?=base_url('public/css/style.css'); ?>">

            <link type="text/javascript" href="<?=base_url('public/js/jquery.js'); ?>">
            <link type="text/javascript" href="<?=base_url('public/js/bootstrap.js'); ?>">

            <link rel="shortcut icon" href="#" />


    </head>
    <body>

    <header>
        Student Companion
    </header>

    <nav class="navbar navbar-default">
        <div class="navbar-header">
                <span class="navbar-brand">Student Companion</span>
            <ul class="nav navbar-nav">

                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">user</a>
                </li>
                <li>
                    <a href="<?=site_url('dashboard/logout')?>">Logout</a>
                </li>

            </ul>
        </div>
    </nav>
<!-- start wrapper-->
<div class="wrapper">
