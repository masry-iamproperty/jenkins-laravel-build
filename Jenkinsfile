pipeline {
    agent {
        docker {
             image 'timoschwarzer/docker-with-compose'
        }
    }
    stages {
        stage("Starting containers"){
            steps {
                sh 'docker-compose up -d --no-color --wait'
                sh 'docker-compose ps'
            }
        }
    }
    post {
        always {
            sh 'docker-compose down --remove-orphans -f'
        }
    }
}
