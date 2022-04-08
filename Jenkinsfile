pipeline {
    environment {
        WWWGROUP = 'docker'
        WWWUSER = 'docker'
        DB_PASSWORD = ''
        DB_USERNAME = 'root'
        DB_DATABASE = ''
    }
    agent {
        docker {
            image 'composer:latest'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'setup.sh'
            }
        }
    }
}
