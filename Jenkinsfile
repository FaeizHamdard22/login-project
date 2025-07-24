pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/FaeizHamdard22/login-project.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build('login-app')
                }
            }
        }

        stage('Run Container') {
            steps {
                script {
                    docker.image('login-app').run('-p 8080:80')
                }
            }
        }
    }
}
