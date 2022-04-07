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
                sh 'docker -v'
                sh 'docker-compose -v'
            }
        }
    }
    post {
        always {
            sh 'docker-compose down --remove-orphans'
        }
    }
}
