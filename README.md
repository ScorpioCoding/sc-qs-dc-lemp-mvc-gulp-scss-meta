![image](quickstart-github-banner.png)

# sc-qs-dc-php-lemp-mvc-gulp-scss-meta

ScorpioCoing QuickStart Docker Apline Nginx Php MySql (LEMP) stack.  
Now with MVC Model-View-Controller Application Setup.  
Using Gulp to Copy files from the dev environment.  
Using Gulp to handle Scss and Javascript.  
Adding Company MetaData and projected into the `header.phtml` through the
Controller.

## Basic Usage

- clone git
- open terminal and go into \_dockerfiles
- run docker command to start
  ```
  docker compose up -d
  ```
- run docker command to stop
  ```
  docker compose down
  ```
- The frontend http://localhost:6080

- phpMyadmin http://localhost:6081

## Gulp Usage

- open second terminal and goto \_gulpfiles
- run command to init gulp to create `node_modules` folder  
  `npm install`
- run command to start gulp  
  `gulp`
- to stop enter keys `ctrl+c`

## Favicons

Favicons can be created by using the following
[link](https://www.favicon-generator.org/)

## MetaData

Add your Company meta to the `html/env/.env-meta` file
