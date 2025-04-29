pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/rutu1603/sample.git'
            }
        }

     stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-sample-app .'
            }
        }

        stage('Deploy Container') {
            steps {
                sh 'docker rm -f php-sample-container || true'
                sh 'docker run -d -p 8080:80 --name php-sample-container php-sample-app'
            }
        }
    }
}



pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/rutu1603/sample.git'
            }
        }

        stage('Pull Docker Image') {
    steps {
        sh 'docker pull palweabhijeet/sample-php:latest'
        sh 'docker run -d -p 80:80 --name sample-php-1 palweabhijeet/sample-php:latest'
    }
}


        stage('Run Docker Container') {
            steps {
                sh 'docker stop sample-php-1|| true'
                sh 'docker rm sample-php-1 || true'
                sh 'docker run -d -p 80:80 --name sample-php-1 sample-php'
            }
        }
    }
}
