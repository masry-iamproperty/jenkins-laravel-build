pipeline {
    agent {
        dockerfile {
             dir '.docker'
        }
    }
    stages {
        stage("Pre Build"){
            steps {
                sh 'docker system prune -a --volumes -f'
            }
        }
        stage("Build"){
            steps{
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
