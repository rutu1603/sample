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
 

                sudo rm -rf /opt/lampp/htdocs/sample
 

                sudo cp -r $WORKSPACE /opt/lampp/htdocs/sample
 

                sudo chown -R www-data:www-data /opt/lampp/htdocs/sample
 

                '''
 

            }
 

        }
 

      stage('Deploy to XAMPP') {
 

    steps {
 

        sh 'rm -rf /opt/lampp/htdocs/my-php-app/*'
 

        sh 'cp -r * /opt/lampp/htdocs/my-php-app/'
 

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
