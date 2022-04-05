pipeline {
    agent {
        docker {
             image 'php:fpm-alpine3.14'
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
