import urllib, json
from django.shortcuts import render

from django.template import loader, Context

# main index view
def index(request):
	BASEURL=request.build_absolute_uri()
	url = BASEURL+'/static/configuration/configuration.json'
	response = urllib.urlopen(url);
	configuration = json.loads(response.read())

	#t = loader.get_template('index.html')
	#c = Context({ 'object_list': None })
	#return t.render(c)

	from django.conf import settings
	from django.template.loaders.app_directories import app_template_dirs
	import os
	template_files = []
	for template_dir in (settings.TEMPLATE_DIRS + app_template_dirs):
		for dir, dirnames, filenames in os.walk(template_dir):
			for filename in filenames:
				template_files.append(os.path.join(dir, filename))
	return 'aaa: '+template_files

	#return render(request, 'index.html', configuration)
