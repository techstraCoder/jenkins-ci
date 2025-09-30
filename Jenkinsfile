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
                   sh 'mkdir -p /workspace/docker-compose/checklist-data/html/checklistplusv2'
                   sh 'cp -r ./frontend/build/* /workspace/docker-compose/checklist-data/html/checklistplusv2'
                   sh 'chown -R 1000:1000 /workspace/docker-compose/checklist-data/html/checklistplusv2' 
                   sh 'echo "readlink for /workspace/docker-compose:"' 
                   sh 'readlink -f /workspace/docker-compose' 
                   sh 'ls -la /workspace/docker-compose/checklist-data/html/checklistplusv2'
                   sh 'echo "Mounts:"'
                  sh 'mount | grep html || true'
                }
            }
        } 
    }
}

