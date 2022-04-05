pipeline {
    agent {
        docker {
             image 'php:8.1.5RC1-fpm-buster'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'composer install -vvv'
            }
        }
        stage("Test"){
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
