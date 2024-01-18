# Nihongogaku App

Nihongogaku app is a Laravel CRUD application for collecting students' favorite Japanese linguistics concepts.

The name 'Nihongogaku' comes from the Japanese romanization of 日本語学 that means 'Japanese linguistics'.

## Table Of Contents

-   [Introduction](#introduction)
-   [ERD](#erd)
-   [Description](#descriptions)
-   [Local Server Installation](#local-server-installation)
-   [Features](#features)
-   [Stack](#stack)

## Introduction

This is an initial attempt at developing a simple Laravel CRUD web application.

The objective is to learn and apply basic web development concepts such MVC.

## ERD

![ERD image](public/erd.png)

## Descriptions

| **Database** | **Details**                                                            |
| ------------ | ---------------------------------------------------------------------- |
| `students`   | store students' IDs, names, and favorite Japanese linguistics concepts |

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

## Features

-   Dashboard with a 'Search' feature:

    ![Dashboard screenshot](public/dashboard.png)

-   'Add A Student':

    !['Add A Student' screenshot](public/add-a-student.png)

-   'Edit':

    !['Edit' screenshot](public/edit.png)

## Stack

-   Laravel 10
-   Bootstrap 5
