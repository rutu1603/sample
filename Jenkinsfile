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
