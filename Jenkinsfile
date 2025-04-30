pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/rutu1603/sample.git'
            }
        }

      stage('Deploy to XAMPP') {
    steps {
        sh 'rm -rf /opt/lampp/htdocs/sample/*'
        sh 'cp -r * /opt/lampp/htdocs/sample/'
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
