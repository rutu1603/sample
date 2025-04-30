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
                sh '''
                    # Define path to XAMPP htdocs
                    DEST="/opt/lampp/htdocs/sample"

                    # Remove old code if exists
                    sudo rm -rf $DEST

                    # Copy current workspace to XAMPP
                    sudo cp -r $WORKSPACE $DEST

                    # Fix permissions
                    sudo chown -R www-data:www-data $DEST
                '''
            }
        }

        stage('Restart Apache (Optional)') {
            steps {
                sh 'sudo /opt/lampp/lampp restartapache'
            }
        }
    }
}
