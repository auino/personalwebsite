from django.shortcuts import render

# Create your views here.
def index(request):
	configuration = {
		'name': 'Enrico',
		'surname': 'Cambiaso',
		'role': 'Computer Scientist',
		'social': [
			{
				'type': 'linkedin',
				'name': 'LinkedIn',
				'url': 'https://linkedin.com/in/enricocambiaso'
			},
			{
				'type': 'twitter',
				'name': 'Twitter',
				'url': 'https://twitter.com/auino'
			},
			{
				'type': 'googleplus',
				'name': 'Google Plus',
				'url': 'http://plus.google.com/+EnricoCambiaso'
			},
			{
				'type': 'facebook',
				'name': 'Facebook',
				'url': 'https://www.facebook.com/enrico.cambiaso'
			},
		],
		'links': {
			'enabled': False,
			'title': '',
			'list': [
				{
					'url':'',
					'name':''
				},
			]
		},
		'email': {
			'address': 'enrico.cambiaso@gmail.com',
			'tag': 'Auino website',
			'question': 'Want to send me nerdish things?'
		}
	}
	return render(request, 'index.html', configuration)

