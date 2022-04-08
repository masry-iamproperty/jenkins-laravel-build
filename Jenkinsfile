pipeline {
    agent {
        docker {
            image 'composer:latest'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'setup.sh'
            }
        }
    }
}
