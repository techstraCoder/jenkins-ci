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
                 sh 'mkdir -p /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2'   
                 sh 'cp -r frontend/build/* /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2/'
                 sh 'chown -R 1000:1000 /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2'
                }
            }
        }
       stage('Deploy for backend') {
           steps {
              script {
                  dir('backend') {
                     sh 'mkdir -p /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2/api'
                     sh 'cp -r . /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2/api/'
                     sh 'chown -R 1000:1000 /usr/local/share/workspace/docker_compose/nginx_data/html/checklistplusv2/api'
                  }
              }   
           }     
    }
 }
}
