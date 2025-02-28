pipeline {
    agent any

    tools {
        maven 'Maven 3' // Ensure Maven is configured in Jenkins
    }

    stages {
        stage('Checkout Code') {  // ✅ Fixed typo
            steps {
                git credentialsId: 'github-token', url: 'https://github.com/rutu1603/sample.git', branch: 'main'
            }
        }

        stage('Build') {
            steps {
                sh 'mvn clean install'
            }
        }

        stage('Test') {
            steps {
                sh 'mvn test'
            }
        }

        stage('Deploy') {
            steps {
                sh 'scp target/*.war user@server:/path/to/deploy'
            }
        }
    }

    post {
        success {
            echo 'Pipeline executed successfully!'
        }
        failure {
            echo 'Pipeline execution failed!'
        }
    }
}
