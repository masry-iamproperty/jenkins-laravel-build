pipeline {
    agent {
        docker {
             image 'nginx-php-fpm:php81'
        }
    }
    stages {
        stage("Build"){
            steps {
                sh 'composer install -vvv'
            }
        }
        stage("Test"){
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
