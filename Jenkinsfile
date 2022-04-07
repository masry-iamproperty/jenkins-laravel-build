pipeline {
    environment {
        WWWGROUP = 'docker'
        WWWUSER = 'docker'
    }
    agent {
        docker {
             image 'tmaier/docker-compose'
        }
    }
    stages {
        stage("Starting containers"){
            steps {
                sh 'docker-compose up'
            }
        }
    }
    post {
        always {
            sh 'docker-compose down --remove-orphans'
        }
    }
}
