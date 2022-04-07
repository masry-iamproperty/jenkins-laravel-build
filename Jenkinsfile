pipeline {
    agent {
        docker {
             image 'timoschwarzer/docker-with-compose'
        }
    }
    stages {
        stage("Pre Build"){
            steps {
                sh 'docker -v'
                sh 'docker-compose -v'
            }
        }
    }
}
