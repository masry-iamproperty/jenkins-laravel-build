pipeline {
    environment {
        WWWGROUP = 'docker'
        WWWUSER = 'docker'
    }
    agent {
        dockerfile {
             dir '.docker'
        }
    }
    stages {
        stage("Starting containers"){
            steps {
                sh 'docker-compose up'
            }
        }
    }
}
