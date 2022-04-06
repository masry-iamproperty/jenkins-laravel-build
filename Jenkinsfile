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
                            dir '.docker'
                        }
                    }
                    steps {
                        echo "hello from selenium"
                    }
                }
                stage("Laravel Tests"){
                    steps {
                        sh 'php artisan test'
                    }
                }
            }
        }
    }
}
