pipeline {
    agent {
        dockerfile {
             dir '.docker'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'docker compose'
            }
        }
    }
}
