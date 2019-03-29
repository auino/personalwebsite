import urllib, json
from django.shortcuts import render

from django.template import loader, Context

# main index view
def index(request):
	BASEURL=request.build_absolute_uri()
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())
	
	from django.shortcuts import render_to_response
	from django.template import RequestContext

	return render_to_response('index.html', configuration, context_instance=RequestContext(request))
	#return render(request, 'index.html', configuration)
