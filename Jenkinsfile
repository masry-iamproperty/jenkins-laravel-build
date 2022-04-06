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
            parallel {
                stage("Acceptance"){
                    agent {
                        docker { image: 'selenium/standalone-chrome:latest'}
                    }
                }
                stage("Laravel Tests"){
                    steps {
                        sh 'vendor/bin/phpunit'
                    }
                }
            }
        }
    }
}
