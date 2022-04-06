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
                        dockerfile {
                            filename 'Dockerfile'
                            dir '.docker'
                            label 'docker compose cluster'
                        }
                    }
                    steps {
                        echo "hello from selenium"
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
