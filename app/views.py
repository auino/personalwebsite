import urllib, json
from django.shortcuts import render

from django.template import loader, Context

# main index view
def index(request):
	BASEURL=request.build_absolute_uri()
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())
	return render(request, 'index.html', configuration)
