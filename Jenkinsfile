pipeline {
    agent {
        docker {
             image 'composer:latest'
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
                echo "Figuring it out"
            }
        }
    }
}
