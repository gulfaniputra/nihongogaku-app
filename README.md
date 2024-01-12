# Nihongogaku App

_**Note:** this project is a work in progress_

Nihongogaku app is a Laravel CRUD application for collecting students' favorite Japanese Linguistics concepts.

The name 'Nihongogaku' comes from the Japanese romanization of 日本語学 that means 'Japanese linguistics'.

## Table Of Contents

-   [Introduction](#introduction)
-   [ERD](#erd)
-   [Local Server Installation](#local-server-installation)
-   [Stack](#stack)

## Introduction

This is my initial attempt at developing a simple Laravel CRUD web application.

The objective is to learn and apply basic web development concepts such MVC.

## ERD

<img src="public/erd.png" alt="ERD">

## Local Server Installation

-   Clone the repo:

    ```
    $ git clone https://github.com/gulfaniputra/nihongogaku-app.git
    ```

-   Move to the `nihongogaku-app` directory on your local machine:

    ```
    $ cd nihongogaku-app
    ```

-   Download the app’s dependencies:

    ```
    $ composer install
    ```

-   Set up the app key to a random string:

    ```
    $ php artisan key:generate
    ```

-   Create the migration repository:

    ```
    $ php artisan migrate:install
    ```

-   Seed the database:

    ```
    $ php artisan db:seed
    ```

## Stack

-   Laravel 10
-   Bootstrap 5
