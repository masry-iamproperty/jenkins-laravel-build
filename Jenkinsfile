pipeline {
    agent {
        docker {
             image 'php:8.1.5RC1-fpm-buster'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'apt-get update && apt-get install -y git'
                sh 'php composer.phar install -vvv'
            }
        }
        stage("Test"){
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
