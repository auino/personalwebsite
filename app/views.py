import urllib, json
from django.shortcuts import render
from django.views.decorators.cache import cache_control

# main index view
@cache_control(max_age=3600)
def index(request):
	BASEURL=request.build_absolute_uri()
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())
	return render(request, 'index.html', configuration)
