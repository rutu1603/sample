pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/yourusername/your-php-project.git'
            }
        }

        stage('Deploy to XAMPP') {
            steps {
                sh '''
                sudo rm -rf /opt/lampp/htdocs/php_project
                sudo cp -r $WORKSPACE /opt/lampp/htdocs/php_project
                sudo chown -R www-data:www-data /opt/lampp/htdocs/php_project
                '''
            }
        }

        stage('Restart XAMPP') {
            steps {
                sh '''
                sudo /opt/lampp/lampp restart
                '''
            }
        }
    }
}
