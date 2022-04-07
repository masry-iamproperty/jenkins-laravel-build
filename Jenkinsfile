pipeline {
    environment {
        WWWGROUP = 'docker'
        WWWUSER = 'docker'
    }
    agent {
        dockerfile {
             dir '.docker'
             args '--privileged -p 2376:2376 --env DOCKER_TLS_CERTDIR=/certs -v jenkins-docker-certs:/certs/client'
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
