pipeline {
  agent any
  environment {
    AWS_PUBLIC_IP_DEV = '18.233.121.142'
  }

  stages {
    stage('Deploy to Development') {
      steps {
        sh '''
          # remove the files
          ssh -i "/var/lib/jenkins/.ssh/aws-key-pair.pem" -o StrictHostKeyChecking=no ec2-user@${AWS_PUBLIC_IP_DEV} "sudo rm -rf /var/www/html/*"
          # copy the files to the dev server
          scp -i "/var/lib/jenkins/.ssh/aws-key-pair.pem" -o StrictHostKeyChecking=no -r ./* ec2-user@${AWS_PUBLIC_IP_DEV}:/var/www/html
          # restart the apache server
          ssh -i "/var/lib/jenkins/.ssh/aws-key-pair.pem" -o StrictHostKeyChecking=no ec2-user@${AWS_PUBLIC_IP_DEV} "sudo systemctl restart httpd"
        '''
      }
    }
  }
}