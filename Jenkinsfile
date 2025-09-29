pipeline {
    
   agent any
   environment {
    CI = 'false'
   }  
   stages {
       stage('Checkout') {
          steps {
            checkout scm
          }
        }
      stage('Build and Deploy Frontend') {
            steps {
                script {
                    // Build and push frontend Docker image
                    dir('frontend') {
                        sh 'ls -la'
                        sh "npm install"
                        sh "npm run build"
                    }
                   sh 'mkdir -p /workspace/docker-compose'
                   sh 'ls -la /workspace/docker-compose' 
                   sh 'cp -r ./frontend/build/* /workspace/docker-compose/checklist-data/html'
                   sh 'ls -la /mnt/c/Users/BenCoder/Desktop/workspace/docker-compose/checklist-data'
                   sh 'chown -R 1000:1000 /workspace/docker-compose/checklist-data/html' 
                }
            }
        } 
    }
}

