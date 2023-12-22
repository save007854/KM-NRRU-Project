pipeline {
    agent any


    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image using Docker Compose
                    sh "docker-compose build"
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Push the Docker image to a registry or deploy to your environment
                    sh "docker-compose push"
                    // Add additional deployment steps as needed
                }
            }
        }
    }
}
