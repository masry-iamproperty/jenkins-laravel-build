pipeline {
    environment {
        WWWGROUP = 'root'
        WWWUSER = 'root'
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
            sh 'docker-compose down --remove-orphans -f'
        }
    }
}
