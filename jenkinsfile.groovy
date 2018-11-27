node {
   def mvnHome
   stage('Preparation') { // for display purposes
      // Get some code from a GitHub repository
      git 'https://github.com/Kumkat94/insa.git'
      // Get the Maven tool.
      // ** NOTE: This 'M3' Maven tool must be configured
      // **       in the global configuration.           
   }
   stage('Build') {
      // Run the maven build
      if (isUnix()) {
         sh "'${mvnHome}/bin/mvn' -Dmaven.test.failure.ignore clean package"
      } else {
        dir("poneys"){
            bat(/composer install/)
            bat(/.\vendor\bin\phpunit -c phpunit.xml/)
        }
      }
   }
   stage('Results') {
      junit 'poneys/logfile.junit.xml'
   }
}