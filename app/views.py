import urllib, json
from django.shortcuts import render

# Create your views here.
def index(request):
	# point following variable to your configuration.json Dropbox public url
	url = 'https://dl.dropboxusercontent.com/u/280149/auino.com/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())
	return render(request, 'index.html', configuration)

