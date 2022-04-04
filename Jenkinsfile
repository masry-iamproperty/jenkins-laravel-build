pipeline {
    agent {
        docker {
             image 'nginx-php-fpm:php81'
        }
    }
    stages {
        stage("Build"){
            sh 'composer install -vvv'
        }
        stage("Test"){
            sh './vendor/bin/phpunit'
        }
    }
}
