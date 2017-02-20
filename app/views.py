import urllib, json
from django.shortcuts import render
from django.conf import settings

BASEURL='http://www.auino.com' # DEBUG
#BASEURL=settings.SITE_URL

# Create your views here.
def index(request):
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())
	return render(request, 'index.html', configuration)
