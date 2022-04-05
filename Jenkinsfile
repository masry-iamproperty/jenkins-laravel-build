pipeline {
    agent {
        docker {
             image 'composer:latest'
        }
    }
    stages {
        stage("Build"){
            steps {
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
