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
          dir('frontend') {
            sh 'pwd'
            sh 'ls -la'
            sh 'npm install'
            sh 'npm run build'
            sh 'ls -la build'
          }
          // now back to workspace root
          sh 'pwd'
          sh 'ls -la .'
          sh 'ls -la frontend'
          sh 'ls -la frontend/build'

          sh 'mkdir -p /usr/share/nginx/html/checklistplusv2'
          sh 'cp -r frontend/build/* /usr/share/nginx/html/checklistplusv2'
          sh 'chown -R 1000:1000 /usr/share/nginx/html/checklistplusv2'

          sh 'echo "After copy:"'
          sh 'ls -la /usr/share/nginx/html/checklistplusv2'
        }
      }
    }
  }
}
