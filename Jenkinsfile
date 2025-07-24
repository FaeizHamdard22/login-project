pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git 'https://github.com/FaeizHamdard22/login-project.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("login-project-image")
                }
            }
        }

        stage('Run Container') {
            steps {
                script {
                    dockerImage.run("-p 8080:80")
                }
            }
        }
    }
}

