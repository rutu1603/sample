pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/rutu1603/sample.git'
            }
        }

        stage('Clean XAMPP Directory') {
            steps {
                sh 'sudo rm -rf /opt/lampp/htdocs/my-php-app/*'
            }
        }

        stage('Deploy to XAMPP') {
            steps {
                sh '''
                sudo cp -r $WORKSPACE/* /opt/lampp/htdocs/my-php-app/
                sudo chown -R www-data:www-data /opt/lampp/htdocs/my-php-app/
                '''
            }
        }

        stage('Restart XAMPP') {
            steps {
                sh 'sudo /opt/lampp/lampp restart'
            }
        }
    }
}
