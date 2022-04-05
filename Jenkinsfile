pipeline {
    agent {
        docker {
             image 'php:8.1.5RC1-fpm-buster'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'dnf install git-all && apt install -y git-all'
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
