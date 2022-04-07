pipeline {
    agent {
        docker {
             image 'timoschwarzer/docker-with-compose'
        }
    }
    stages {
        stage("Prune Docker Data"){
            steps {
                sh 'docker system prune -a --volumes -f'
            }
        }
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
