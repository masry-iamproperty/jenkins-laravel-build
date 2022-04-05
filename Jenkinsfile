pipeline {
    agent {
        docker {
             image 'composer:latest'
             image 'selenium/standalone-chrome'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh './setup.sh'
            }
        }
        stage("Test"){
            steps {
                sh './vendor/bin/phpunit'
            }
        }
        stage("Acceptance Test"){
            steps {
                // what to type here ... ?
            }
        }
    }
}
