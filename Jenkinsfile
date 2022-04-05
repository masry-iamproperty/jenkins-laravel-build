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
            agent {
                docker {
                     image 'selenium/standalone-chrome'
                }
            }
            steps {
                // what to type here ... ?
                echo "Figuring it out"
            }
        }
    }
}
