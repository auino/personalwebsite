import urllib, json
from django.shortcuts import render

from django.template import loader, Context

# main index view
def index(request):
	BASEURL=request.build_absolute_uri()
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())

	t = loader.get_template('templates/index.html')
	c = Context({ 'object_list': None })
	return t.render(c)
	#return render(request, 'index.html', configuration)
