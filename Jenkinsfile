pipeline {
    agent {
        docker {
            image 'ubuntu:21.10'
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
