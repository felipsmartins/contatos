from fabric.api import local

def deploy():
	local("git push origin master")

def server():
	local('php -S localhost:9896 -t public')
