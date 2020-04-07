class CustomCache(object):
	def process_response(self, request, response):
		if request.path.startswith('/static/'):
			response['Cache-Control'] = 'max-age=3600'
		return response
