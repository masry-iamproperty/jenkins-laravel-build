pipeline {
    agent {
        dockerfile {
             dir '.docker'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'docker --version'
                sh 'docker-compose --version'
            }
        }
    }
}
