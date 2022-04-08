pipeline {
    environment {
        WWWGROUP = 'docker'
        WWWUSER = 'docker'
        DB_PASSWORD = ''
        DB_USERNAME = 'root'
        DB_DATABASE = ''
    }
    agent {
        dockerfile {
             dir '.docker'
             args '--privileged --env DOCKER_TLS_CERTDIR=/certs -v jenkins-docker-certs:/certs/client -v /var/run/docker.sock:/var/run/sock'
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
