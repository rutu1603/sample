pipeline {
    agent any

    environment {
        IMAGE_NAME = 'sample-php'
        CONTAINER_NAME = 'sample'
        DOCKER_PORT = '8080:80' // Change if your container uses different ports
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/rutu1603/sample.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $IMAGE_NAME .'
            }
        }

        stage('Stop and Remove Existing Container') {
            steps {
                script {
                    sh '''
                    if [ "$(docker ps -aq -f name=$CONTAINER_NAME)" ]; then
                        docker stop $CONTAINER_NAME || true
                        docker rm $CONTAINER_NAME || true
                    fi
                    '''
                }
            }
        }

        stage('Run Docker Container') {
            steps {
                sh 'docker run -d -p $DOCKER_PORT --name $CONTAINER_NAME $IMAGE_NAME'
            }
        }
    }
}
